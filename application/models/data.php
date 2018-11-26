<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class data extends CI_Model {


  function __construct() {
    parent::__construct();
  }


  
  function addadmin() {
    $data = array(
          'username' => $this->input->post("username"),
          'password' => $this->input->post("password"),
          'bank-number' => $this->input->post("bank-number")
          'email' => $this->input->post("email")
          'name' => $this->input->post("name")
          'adress' => $this->input->post("adress")
  );

  $this->db->insert('admin', $data);
  return 1;
  }

}
