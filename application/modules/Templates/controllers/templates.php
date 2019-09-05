<?php
  class Templates extends MY_Controller{
    public function __construct(){
      parent::__construct();
    }

    public function admin($data = null){
      $this->load->helper('html');
      $this->load->view('main-view.php', $data);
    }
  }
?>
