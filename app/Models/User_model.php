<?php class User_model extends CI_Model {

public function insert_data($data) {
    $this->db->insert('user', $data);
    return $this->db->insert_id();
}
public function check_username_exists($username) {
    $query = $this->db->get_where('users', array('username' => $username));
    if (empty($query->row_array())) {
        return true;
    } else {
        return false;
    }
}
public function check_email_exists($email) {
    $query = $this->db->get_where('users', array('email' => $email));
    if (empty($query->row_array())) {
        return true;
    } else {
        return false;
    }
}
public function tambah_data_siswa($data) {
    $this->db->insert('data_siswa', $data);
    
}
}
