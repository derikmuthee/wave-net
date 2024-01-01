<?php

namespace App\Controllers;


use App\Models\UserModel;


class Register extends BaseController
{
    protected $db;

    public function __construct()
    {
        // Load the database connection
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        // Load the registration view or perform any necessary logic
        return view('register_view');
    }

    public function processRegistration()
    {
        $userModel = new UserModel();

        $email = $this->request->getPost('email');
        $username = $this->request->getPost('username');
        $phone = $this->request->getPost('phone');
        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirm-password');

        try {
            if ($password !== $confirmPassword) {
                // Handle password mismatch error
                throw new \Exception('Password mismatch');
            }

            // Use the model for registration
            if ($userModel->registerUser($email, $username, $phone, $password)) {
                // Redirect to the dashboard
                return redirect()->to('dashboard')->with('success', 'Registration successful!');
            } else {
                // Handle other registration failure scenarios
                throw new \Exception('Registration failed');
            }
        } catch (\Exception $e) {
            // Redirect with error message
            return redirect()->to('/registration-failure')->with('error', $e->getMessage());
        }
    }

    public function registrationFailure()
    {
        return view('registration_failure_view'); // Adjust the view name accordingly
    }
}


