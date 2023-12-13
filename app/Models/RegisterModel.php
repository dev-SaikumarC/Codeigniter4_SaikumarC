<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model
{
    protected $table = 'registered_users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password'];

    public function RegisterUser($data)
    {
        return $this->insert($data);
    }
}
