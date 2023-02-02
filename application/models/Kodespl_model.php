<?php

defined('BASEPATH') or exit('No direct script access allowed');



class kodespl_model extends CI_Model

{

    public function getMax($table = null, $field = null)

    {

        $this->db->select_max($field);

        return $this->db->get($table)->row_array()[$field];
    }



    public function getMaxkasbon($table = null, $field = null)

    {

        $this->db->select_max($field);

        return $this->db->get($table)->row_array()[$field];
    }
    public function getMaxMR($table = null, $field = null)
    {
        $this->db->select_max($field);
        return $this->db->get($table)->row_array()[$field];
    }
}
