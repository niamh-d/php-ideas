<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController
{
    public function index()
    {
        $idea = new Idea([
            "content" => "test",
        ]);
        $idea->save();

        return view(
            "dashboard",
            ['ideas' => Idea::orderBy('created_at', 'desc')->get()]
        );
    }
}
