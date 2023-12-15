<?php

namespace App\Controllers;

use App\Models\RegisterModel;
// use BlogModel;

class RegisterController extends BaseController
{
    public function index()
    {
        return view('registration');
    }

    // public function processRegistration()
    // {
    //     $session = session();

    //     // Retrieve form data
    //     $name = $this->request->getPost('name');
    //     $email = $this->request->getPost('email');
    //     $password = $this->request->getPost('password');

    //     // Store user data in session
    //     $userData = [
    //         'name' => $name,
    //         'email' => $email,
    //         'password' => $password, // Note: In a real application, you should hash the password.
    //     ];
    //     $session->set('user_data', $userData);
    //     return redirect()->to('/login')->with('success', 'Registration successful. Please log in.');
    // }

    public function processRegistration()
    {
        $model = new RegisterModel();
        $data = [
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ];
        $existingUser = $model->where('email', $data['email'])->first();
        if ($existingUser) {
            // Email already exists, redirect back to registration page with an error message
            return redirect()->to('/registration')->with('error', 'User Already Exists!');
        } else {
            $blogs = $model->RegisterUser($data);
            if ($blogs) {
                return redirect()->to('/')->with('success', 'Registration successful. Please log in.');
            } else {
                echo "Register Failed";
                return redirect()->to('/')->with('success', 'Registration successful. Please log in.');
            }
        }
    }
}
