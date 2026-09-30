<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin01',
                'full_name' => 'Admin User',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Maria Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Juan Dela Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Andrea Reyes',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Kevin Garcia',
                'role' => 'Staff'
            ]
        ];

        return view('users/index', [
            'users' => $users
        ]);
    }
}