<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {
        
        function __construct() {
            parent::__construct();
            $this->load->helper('url');
        }
        
	public function index(){
            //método padrão do controller
	}
}
