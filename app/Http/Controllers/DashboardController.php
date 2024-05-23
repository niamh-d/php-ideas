<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController
{
    public function index()
    {
        $users = [
            [
                "name" => "John",
                "age" => "25",
            ],
            [
                "name" => "Jane",
                "age" => "30",
            ],
        ];
        return view(
            "dashboard",
            ['users' => $users]
        );
    }
}
