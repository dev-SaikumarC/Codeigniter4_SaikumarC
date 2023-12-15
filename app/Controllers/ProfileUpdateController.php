<?php

namespace App\Controllers;

use App\Models\ProfileUpdateModel;
// use BlogModel;

class ProfileUpdateController extends BaseController
{
    public function index()
    {
        $session = session();
        $userData = $session->get('user_data');
        $model = new ProfileUpdateModel();
        $data['users_profile'] = $model->findAll();
        return view('profileupdate', $data, $userData);
    }
    public function update()
    {
        $model = new ProfileUpdateModel();
        $fileinfo = $this->request->getFile('profile_image_update');
        $id = $this->request->getVar('id');

        $data = [
            'name' => $this->request->getVar('name'),
            'role' => $this->request->getVar('role'),
            'company' => $this->request->getVar('company'),
            'city' => $this->request->getVar('city'),
            'state' => $this->request->getVar('state'),
            'country' => $this->request->getVar('country'),
            'zip' => $this->request->getVar('zip'),
            'mobile' => $this->request->getVar('mobile'),
            'gender' => $this->request->getVar('gender'),
        ];

        // print_r($fileinfo);
        if ($fileinfo->isValid() && !$fileinfo->hasMoved()) {
            $data['profile_image'] = $fileinfo->getName();

            if ($fileinfo->move("images", $data['profile_image'])) {
                $res = $model->updateProfile($id, $data);
            } else {
                echo "Failed";
                return;
            }
        } else {
            $res = $model->updateProfile($id, $data);
        }
        if ($res) {
            return redirect()->to('/profile');
        } else {
            return redirect()->to('/profile');
        }
    }
}
