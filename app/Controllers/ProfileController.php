<?php

namespace App\Controllers;

use App\Models\ProfileModel;
// use App\Models\ProfileUpdateModel;
// use App\Models\ProfileModel;
// use BlogModel;

class ProfileController extends BaseController
{
    public function index()
    {
        $session = session();
        $userData = $session->get('user_data');
        $model = new ProfileModel();
        $data['users_profile'] = $model->getProfile();
        return view('profile', $data, $userData);
    }

    public function profileupdate()
    {
        $session = session();
        $userData = $session->get('user_data');
        $model = new ProfileModel();
        $data['users_profile'] = $model->findAll();
        return view('profileupdate', $data, $userData);
    }

    public function store()
    {
        $model = new ProfileModel();
        $fileinfo = $this->request->getFile("profile_image_update");

        if ($fileinfo->isValid() && !$fileinfo->hasMoved()) {
            $data = [
                'id' => $this->request->getVar('id'),
                'name' => $this->request->getVar('name'),
                'role' => $this->request->getVar('role'),
                'company' => $this->request->getVar('company'),
                'city' => $this->request->getVar('city'),
                'state' => $this->request->getVar('state'),
                'country' => $this->request->getVar('country'),
                'zip' => $this->request->getVar('zip'),
                'mobile' => $this->request->getVar('mobile'),
                'gender' => $this->request->getVar('gender'),
                'experience' => $this->request->getVar('experience'),
                'dob' => $this->request->getVar('dob'),
                'profile_image' => $fileinfo->getName(),
            ];
            $fileName = $fileinfo->getName();
            if ($fileinfo->move("images", $fileName)) {
                $blogs = $model->createProfile($data);
                if ($blogs) {
                    return redirect()->to('/profile');
                } else {
                    return redirect()->to('/profile');
                }
            } else {
                echo "Failed";
            }
        } else {
            echo "failed";
        }
        // print_r('hiii');
    }

    public function update()
    {
        $model = new ProfileModel();
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
            'experience' => $this->request->getVar('experience'),
            'dob' => $this->request->getVar('dob'),
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
    public function createprofile()
    {
        $session = session();
        $userData = $session->get('user_data');
        return view('profilecreate', $userData);
    }
}
