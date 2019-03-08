<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class My_Controller extends CI_controller{
    public function __construct()
    {
        parent::__construct();
        echo "<br>nyoba base controller";
    }
}

?>