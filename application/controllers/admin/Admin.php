<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 27/11/2559
 * Time: 11:05
 */
class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view ("admin/admin_view");
    }
}