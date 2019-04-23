<?php

class Song extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Song_model');
        $this->load->library('form_validation');
    }
    
    #account
    public $data = array(
        "fullname" => "Prana Pramudita Kusdiananggalih",
        "username"=> "pranapramudita"
    );

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
    public function lyrics($title){
        $data['title'] = $this->Song_model->getLyrics($title);
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
    
    #submit_save function
    public function submit_save(){
        $data = [
            "name" => $this->input->post('artist', true),
            "album_name" => $this->input->post('album', true),
            "song_title" => $this->input->post('title', true),
            "lyrics" => $this->input->post('lyrics', true),
        ];
        $this->Song_model->insert_lyrics($data);
        redirect('submit','refresh');
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
        redirect('contact','refresh');
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

    #CRUD song function
    public function createsong(){
        $data = [
            // Judul, album, lirik, tahun, penulis pake b ing
			"title" => $this->input->post('title', true),
        ];
        $this->Song_model->create_song($data);
        redirect('index.php/web/song','refresh');
    }

    public function readsong(){
        $data_song = $this->Song_model->read_song();
        $this->load->view('page_header');
        $this->load->view('page_song',['data'=>$data_song]);
        $this->load->view('page_footer');
    }

    public function updatesong(){
        $data = [
            // Judul, album, lirik, tahun, penulis pake b ing
			"title" => $this->input->post('title', true),
        ];
        $this->Song_model->update_song($data['id_song'],$data);
        redirect('index.php/web/song','refresh');
    }

    public function deletesong($id_song){ 
        $this->Song_model->delete_song($id_song);
        redirect('index.php/web/song','refresh');
    }

}

?>

