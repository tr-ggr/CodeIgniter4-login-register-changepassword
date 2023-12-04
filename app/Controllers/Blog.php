<?php
    class Blog extends CI_Controller {
        public function index()
        {
            $data['title'] = "Title";
            $data['heading'] = "Heading";
            $this->load->view('cwblogview', $data);
        }
    }

?>