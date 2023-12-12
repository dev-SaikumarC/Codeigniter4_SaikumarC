<?php

namespace App\Controllers;

// use App\Models\RegisterModel;
// use BlogModel;

class LoginController extends BaseController
{

    public function loginForm()
    {
        return view('login');
    }

    public function processLogin()
    {
        $session = session();

        // Retrieve form data
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Retrieve user data from session
        $userData = $session->get('user_data');

        // Check if email and password match the stored data
        if ($userData && $userData['email'] === $email && $userData['password'] === $password) {
            // Authentication successful
            $session->set('logged_in', true);

            // Redirect to a secured area or display a success message
            // return redirect()->to('/dashboard');
            
            // return redirect()->to('/blogpage')->with('user', $session['name']);
            return redirect()->to('/blogpage')->with('user', '<h5>Welcome: <span style="color: #26a69a;"><b>' .$userData['name']. '</b></span></h5>');
        } else {
            // Authentication failed, redirect to login form with an error message
            return redirect()->to('/login')->with('error', 'Invalid email or password');
        }
    }
}
