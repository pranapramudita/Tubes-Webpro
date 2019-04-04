<?php

class song extends CI_Controller(){
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_song');
    }
    
    #menu function
    public function menu(){
        $this->load->view('page_header');
        $this->load->view('page_menu');        
        $this->load->view('page_footer');        
    }

    #song function
    public function createsong(){
        $data = [
            // Judul, album, lirik, tahun, penulis pake b ing
			"title" => $this->input->post('title', true),
        ];
        $this->model_song->create_song($data);
        redirect('index.php/web/song','refresh');
    }

    public function readsong(){
        $data_song = $this->song->getAllSong();
        $this->load->view('page_header');
        $this->load->view('page_song',['data'=>$data_song]);
        $this->load->view('page_footer');
    }

    public function updatesong(){
        $data = [
            // Judul, album, lirik, tahun, penulis pake b ing
			"title" => $this->input->post('title', true),
        ];
        $this->song->update_song($data['id_song',$data]);
        redirect('index.php/web/song','refresh');
    }

    public function deletesong($id_song){ 
        $this->model_song->delete_song($id_song);
        redirect('index.php/web/song','refresh');
    }
}

?>