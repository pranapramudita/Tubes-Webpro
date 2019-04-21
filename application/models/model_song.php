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
        $where = "name like '%" .$keyword. "%'";
        $this->db->select('*');
        $this->db->from('artist');
        $this->db->where($where);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }else {
            return false;
        }
    }

    public function SearchSong(){
        $keyword = $this->input->post('keyword', true);
        $where = "song_title like '%" .$keyword. "%'";
        $this->db->select('*');
        $this->db->from('song');
        $this->db->where($where);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }else {
            return false;
        }
    }

    public function SearchAlbum(){
        $keyword = $this->input->post('keyword', true);
        $where = "album_name like '%" .$keyword. "%'";
        $this->db->select('*');
        $this->db->from('album');
        $this->db->where($where);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }else {
            return false;
        }   
    }
    
    public function insert_lyrics(){
        $data = [
            "song_title" => $this->input->post('title', true),
            "lyrics" => $this->input->post('lyrics', true),
        ];
        $query = $this->db->insert('song', $data);
        return $query;
    }
}
?>