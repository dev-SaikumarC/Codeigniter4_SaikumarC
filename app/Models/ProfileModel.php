<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table = 'users_profile';
    protected $allowedFields = ['id','profile_image', 'name', 'role', 'company', 'city', 'state', 'country', 'zip', 'mobile', 'gender', 'experience','dob'];

    public function getProfile()
    {
        return $this->findAll();
    }
    public function updateProfile($id, $data)
    {
        return $this->update($id, $data);
    }
    public function createProfile($data)
    {
        return $this->insert($data);
    }
}
