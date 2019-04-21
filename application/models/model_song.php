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

    public function getSong(){
		$query = $this->db->get('song');
		return $query->result_array();
    }
    
    public function SearchSong(){
        $keyword = $this->input->post('keyword', true);
        $where = "title like '%" .$keyword. "%' OR artist like '%" .$keyword. "%' OR album like '%" .$keyword. "%'";
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
    
    public function insert_lyrics(){
        $data = [
            "title" => $this->input->post('title', true),
            "artist" => $this->input->post('artist', true),
            "album" => $this->input->post('album', true),
            "lyrics" => $this->input->post('lyrics', true),
        ];
        $query = $this->db->insert('song', $data);
        return $query;
    }
}
?>