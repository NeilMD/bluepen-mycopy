<?php
class Home_model extends CI_Model {
  public function __construct() {
    $this->load->database();
  }

  public function get_message() {
    $res = $this->db->get("home");
    if ($res) {
      return $res->result_array();
    }
    return false;
  }

  public function update_message($visible, $following) {
    $this->db->trans_start();
    $this->db->update("home", array("key" => "visible", "value" => $visible), "key");
    $this->db->update("home", array("key" => "following", "value" => $following), "key");
    $this->db->trans_complete();
    return true;
  }
}

?>
