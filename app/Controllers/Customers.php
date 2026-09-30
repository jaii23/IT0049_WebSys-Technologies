<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Michael John Cruz',
                'email' => 'michael@example.com',
                'phone' => '09171234567'
            ],
            [
                'full_name' => 'John Michelle Mae Santos',
                'email' => 'john@example.com',
                'phone' => '09181234567'
            ],
            [
                'full_name' => 'Angela Reyes',
                'email' => 'angela@example.com',
                'phone' => '09191234567'
            ],
            [
                'full_name' => 'Mark Daniel Garcia',
                'email' => 'mark@example.com',
                'phone' => '09201234567'
            ],
            [
                'full_name' => 'Sofia Mendoza',
                'email' => 'sofia@example.com',
                'phone' => '09211234567'
            ]
        ];

        return view('customers/index', [
            'customers' => $customers
        ]);
    }
}