<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    protected $table = 'users';

    public function get_by_credentials($username, $password)
    {
        return $this->db
            ->where('username', $username)
            ->where('password', $password)
            ->get($this->table)
            ->row();
    }
}
