<?php
  class Featured_model extends CI_Model {
    public function __construct() {
      $this->load->database();
    }

    /* This function updates the list of featured sites.
    Returns: true if the update is successful and false otherwise. */
    public function update_featured_sites($sites) {
      $add = array();
      for ($i = 0; $i < count($sites); $i++) {
        array_push($add, array("site_ref" => $sites[$i]));
      }

      $this->db->trans_start();
      $this->db->delete("featured");
      $this->db->insert_batch($add);
      $affected = $this->db->affected_rows();
      $this->db->trans_complete();

      if ($affected > 0) {
        return true;
      }
      return false;
    }

    /* This function gets all featured sites.
    Returns: the array of featured sites, or false if the query failed */
    public function get_featured_sites() {
      $this->db->select("site.site_ref, site.remarks");
      $this->db->join("site", "site.site_ref = featured.site_ref");
      $res = $this->db->get("featured");
      if ($res) {
        return $res->result_array();
      }
      return false;
    }
  }
?>
