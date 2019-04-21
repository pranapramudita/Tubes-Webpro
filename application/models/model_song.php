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
		$this->db->select('album_name','song','name');
		$this->db->from('artist');
        $this->db->join('artist','artist.id_artist=album.id_artist');
        $this->db->join('song','song.id_artist=song.id_artist');
		$query = $this->db->get();
		return $query->result();
	}
}
?>