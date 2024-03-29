<?php

class Song extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Song_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('text');
        $this->load->helper('form','url');
    }

    #menu function
    public function index(){
        $data['song']=$this->Song_model->getSong();
        $this->load->view('page_header');
        $this->load->view('page_home',$data); 
        $this->load->view('page_footer');
    }

    #search function
    public function search(){
        $data['song']=$this->Song_model->SearchSong();
        $this->load->view('page_header');
        $this->load->view('page_search',$data);
        $this->load->view('page_footer');
    }

    #artist function
    public function artist($artist){
        $artist = str_replace('%20', ' ', $artist);
        $data['song'] = $this->Song_model->GetArtist($artist);
		$this->load->view('page_header');
		$this->load->view('page_artist', $data);
        $this->load->view('page_footer');
    }

    #listartist function
    public function listartist($letter){
        $data['artist'] = $this->Song_model->GetListArtist($letter);
		$this->load->view('page_header');
		$this->load->view('page_listartist',$data);
        $this->load->view('page_footer');
    }
    
    #listartist function
    public function lyrics($id){
        $id = str_replace('%20', ' ', $id);
        $data['title'] = $this->Song_model->getLyrics($id);
        $this->load->view('page_header');
        $this->load->view('page_lyrics', $data);
        $this->load->view('page_footer');
    }

    #submit function
    public function submit(){
        $this->load->view('page_header');
        $this->load->view('page_submit');
        $this->load->view('page_footer');
    }
    
    public function uploadsubmit(){
        $this->upload();
        $this->submit_save();
    }

    #submit_save function
    public function submit_save(){
        $this->load->library('upload');
        $file = $this->upload->data();
        $data = [
            "title" => $this->input->post('title', true),
            "artist" => $this->input->post('artist', true),
            "album" => $this->input->post('album', true),
            "lyrics" => $this->input->post('lyrics', true),
            "image" => $file['file_name'],
        ];
        $this->Song_model->insert_lyrics($data);
        redirect('index.php/song/submit','refresh');
    }
    
    #upload function
    public function upload(){
        $config['upload_path'] = './assets/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']  = '4096';
        $config['max_width']  = '1920';
        $config['max_height']  = '1080';
        
        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload('userfile')){
            $error = array('error' => $this->upload->display_errors());
        }
        else{
            $data = array('upload_data' => $this->upload->data());
        }
    }
    
    #contact function
    public function contact(){
        $this->load->view('page_header');
        $this->load->view('page_contact');
        $this->load->view('page_footer');
    }

    #contact_save function
    public function contact_save(){
        $data = [
            "name" => $this->input->post('name', true),
            "email" => $this->input->post('email', true),
            "subject" => $this->input->post('subj', true),
            "message" => $this->input->post('comments', true),
        ];
        $this->Song_model->insert_contact($data);
        redirect('index.php/song/contact','refresh');
    }

    #adv function
    public function adv(){
        $this->load->view('page_header');
        $this->load->view('page_adv');
        $this->load->view('page_footer');
    }

    #privacy function
    public function privacy(){
        $this->load->view('page_header');
        $this->load->view('page_privacy');
        $this->load->view('page_footer');
    }

    #copyright function
    public function copyright(){
        $this->load->view('page_header');
        $this->load->view('page_copyright');
        $this->load->view('page_footer');
    }

    #error function
    public function error(){
        $this->load->view('page_error');
    }

    public function readsong(){
        $data_song = $this->Song_model->read_song();
        $this->load->view('page_header');
        $this->load->view('page_song',['data'=>$data_song]);
        $this->load->view('page_footer');
    }

    public function updatesong($id){
        $data = [
            "title" => $this->input->post('title', true),
            "artist" => $this->input->post('artist', true),
            "album" => $this->input->post('album', true),
            "lyrics" => $this->input->post('lyrics', true),
        ];
        $this->Song_model->update_song($id,$data);
        redirect('','refresh');
    }

    public function update($id){
        $data['id'] = $this->Song_model->getSongbyid($id);
        $this->load->view('page_header');
        $this->load->view('page_update',$data,$id);
        $this->load->view('page_footer');
    }

    public function deletesong($id_song){ 
        $this->Song_model->delete_song($id_song);
        redirect('','refresh');
    }

}

?>

