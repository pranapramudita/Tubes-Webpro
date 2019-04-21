<?php

class song extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_song');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }
    
    #account
    public $data = array(
        "fullname" => "Prana Pramudita Kusdiananggalih",
        "username"=> "pranapramudita"
    );

    #menu function
    public function home(){
        $data['song']=$this->model_song->getSong();
        $this->load->view('page_header');
        $this->load->view('page_home',$data); 
        $this->load->view('page_footer');
    }

    #search function
    public function search(){
        $data['song']=$this->model_song->SearchSong();
        $this->load->view('page_header');
        $this->load->view('page_search',$data);
        $this->load->view('page_footer');
    }
    
    #word function
    public function word(){
        $this->load->view('page_header');
        $this->load->view('page_word');
        $this->load->view('page_footer');
    }

    #artist function
    public function artist(){
        $data['song']= $this->model_song->GetArtist();
		$this->load->view('page_header');
		$this->load->view('page_artist',$data);
        $this->load->view('page_footer');
    }

    #listartist function
    public function listartist(){
    //     $data_artist = $this->model_song->GetArtist();
		$this->load->view('page_header');
		$this->load->view('page_listartist');
        $this->load->view('page_footer');
    }
    
    #function submit lyrics
    public function submit(){
        $this->load->view('page_header');
        $this->load->view('page_submit');
        $this->load->view('page_footer');
    }
    
    #submit_save function
    public function submit_save(){
        $data = [
            "title" => $this->input->post('title', true),
            "artist" => $this->input->post('artist', true),
            "album" => $this->input->post('album', true),
            "lyrics" => $this->input->post('lyrics', true),
            "image" => $this->input->post('userfile', true),
        ];
        $this->model_song->insert_lyrics($data);
        redirect('home','refresh');
    }

    #upload function
    public function upload(){
        $config['upload_path'] = './assets/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '4096';
        $config['max_width']  = '1920';
        $config['max_height']  = '1080';
        
        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload()){
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
        $this->model_song->create_song($data);
        redirect('index.php/web/song','refresh');
    }

    public function readsong(){
        $data_song = $this->model_song->read_song();
        $this->load->view('page_header');
        $this->load->view('page_song',['data'=>$data_song]);
        $this->load->view('page_footer');
    }

    public function updatesong(){
        $data = [
            // Judul, album, lirik, tahun, penulis pake b ing
			"title" => $this->input->post('title', true),
        ];
        $this->model_song->update_song($data['id_song'],$data);
        redirect('index.php/web/song','refresh');
    }

    public function deletesong($id_song){ 
        $this->model_song->delete_song($id_song);
        redirect('index.php/web/song','refresh');
    }

}

?>