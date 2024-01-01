<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Adjust this based on your actual table name
    protected $primaryKey = 'id'; // Adjust this based on your primary key column name

    protected $allowedFields = ['email', 'username', 'phone', 'password']; // Fields that can be mass-assigned

    public function registerUser($email, $username, $phone, $password)
    {
        try {
            // Check if the user with the given email already exists
            $existingUser = $this->where('email', $email)->first();
            if ($existingUser) {
                throw new \Exception('User with this email already exists');
            }

            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Insert user data into the 'users' table
            $data = [
                'email' => $email,
                'username' => $username,
                'phone' => $phone,
                'password' => $hashedPassword,
                // Add other fields as needed
            ];

            $this->insert($data);

            return true; // Registration successful
        } catch (\Exception $e) {
            // Registration failed
            return false;
        }
    }
}
