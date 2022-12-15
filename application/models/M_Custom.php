<?php

class M_Custom extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    function testimonial()
    {
        $query =  $this->db->query("SELECT * FROM Testimonial LEFT JOIN User ON Testimonial.UserID = User.UserID WHERE Testimonial.Status = 'show' ");

        return $query->result_array();
    }
}
