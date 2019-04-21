<?php
class model_song extends CI_Model{
    
    public function create_song($data){
        $this->db->insert('song', $data);
    }

    public function read_song(){
        $this->db->select('*');
        $this->db->from('song');
        $query = $this->db->get();
        return $query->result();
    }

    public function update_song($id_song,$data){
        $this->db->where('id_song', $id_song);
        $this->db->update('song', $data);
    }

    public function delete_song($id_song){
        $this->db->where('id_song', $id_song);
        $this->db->delete('song');
    }

    public function GetArtist(){
		$this->db->select('album_name','song_title','name');
		$this->db->from('artist');
        $this->db->join('album','artist.id_artist=album.id_artist');
        $this->db->join('song','artist.id_artist=song.id_artist');
		$query = $this->db->get();
		return $query->result();
    }
    
    public function SearchArtist(){
        $keyword = $this->input->post('keyword', true);
        $where = "name like %" .$keyword. "%'";
        $this->db->select('*');
        $this->db->from('artist');
        $this->db->where($where);
        $query = $this->db->get()->result_array();
        if ($query->num->rows > 0) {
            return $query;
        }else {
            return false;
        }
    }

    public function SearchSong(){
        $keyword = $this->input->post('keyword', true);
        $where = "song_title like %" .$keyword. "%'";
        $this->db->select('*');
        $this->db->from('song');
        $this->db->where($where);
        $query = $this->db->get()->result_array();
        if ($query->num->rows > 0) {
            return $query;
        }else {
            return false;
        }
    }

    public function SearchAlbum(){
        $keyword = $this->input->post('keyword', true);
        $where = "album_name like %" .$keyword. "%'";
        $this->db->select('*');
        $this->db->from('name');
        $this->db->where($where);
        $query = $this->db->get()->result_array();
        if ($query->num->rows > 0) {
            return $query;
        }else {
            return false;
        }   
    }

    
    public function insert_lyrics(){
        $data = [
			"id_song" => $this->input->post('name', true),
			"id_artist" => $this->input->post('artist', true),
			"id_album" => $this->input->post('song', true),
            "song_title" => $this->input->post('album', true),
            "producer" => $this->input->post('source', true),
            "lyrics" => $this->input->post('lyrics', true),
        ];
        $query = $this->db->insert('song', $data);
        return $query;
    }
}
?>