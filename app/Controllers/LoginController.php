<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\UserModel;

class LoginController extends BaseController
{
    protected $userModel;

    public function __construct(UserModel $userModel)
    {
        $this->userModel = $userModel;
    }

    public function index()
    {
        return view('home');
    }

    public function attemptLogin()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email'    => 'required|valid_email',
            'password' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('login')->withInput()->with('error', $validation->listErrors());
        }

        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $this->userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            $this->setSession($user);
            return redirect()->to('dashboard');
        } else {
            return redirect()->to('login')->withInput()->with('error', 'Invalid email or password');
        }
    }

    private function setSession($user)
    {
        $session = session();

        $userData = [
            'id'       => $user['id'],
            'username' => $user['username'],
            'email'    => $user['email'],
        ];

        $session->set(['isLoggedIn' => true, 'userData' => $userData]);
    }

    public function dashboard()
  {
        // Check if user is logged in
        if (!session('isLoggedIn')) {
            return redirect()->to('login');
        }
    
        $userData = session('userData');
    
        // Pass $userData to the view
        return view('dashboard', ['userData' => $userData]);
    }

    public function logout()
    {
        // Access the session service through the session() function
        $session = session();

        // Your logout logic here
        $session->destroy(); // or any other logout logic you need

        return redirect()->to('login');
    }

}


 
      
      
   