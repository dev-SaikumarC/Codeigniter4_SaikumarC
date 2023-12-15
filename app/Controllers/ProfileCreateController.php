<?php

namespace App\Controllers;

// use App\Models\ProfileModel;
// use BlogModel;

class ProfileCreateController extends BaseController
{
    public function createprofile()
    {
        $session = session();
        $userData = $session->get('user_data');
        return view('profilecreate', $userData);
    }
}
