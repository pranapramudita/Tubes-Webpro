<?php
class Song_model extends CI_model{
    
    public function create_song($data){
        $this->db->insert('song', $data);
    }

    public function read_song(){
        $this->db->select('*');
        $this->db->from('song');
        $query = $this->db->get();
        return $query->result();
    }

    public function update_song($id,$data){
        $this->db->where('id_song', $id);
        return $this->db->update('song', $data);
    }

    public function delete_song($id_song){
        $this->db->where('id_song', $id_song);
        $this->db->delete('song');
    }

    public function getLyrics($id){
        return $this->db->get_where('song', ['id_song' => $id])->result_array();
    }

    public function GetArtist($artist){
        return $this->db->get_where('song', ['artist' => $artist])->result_array();
    }

    public function getSongbyid($id){
        return $this->db->get_where('song', ['id_song' => $id])->result_array();
    }

    public function GetListArtist($letter){
        if($letter == 1){
            $query = $this->db->query("SELECT artist, id_song FROM song WHERE artist REGEXP '^[^a-zA-Z].*$'");
        }else{
            $query = $this->db->query("SELECT artist, id_song FROM song WHERE artist LIKE '$letter%'");
        }
        return $query->result_array();
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
        return $query->result_array();
    }
    
    public function insert_lyrics($data){
        $query = $this->db->insert('song', $data);
        return $query;
    }

    public function insert_contact($data){
        $query = $this->db->insert('contact', $data);
        return $query;
    }
}
?>