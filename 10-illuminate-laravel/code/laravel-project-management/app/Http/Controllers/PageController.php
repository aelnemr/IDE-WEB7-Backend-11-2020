<?php

namespace App\Http\Controllers;


use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    public function home()
    {
//        User::query()->create([
//            'name' => 'user',
//            'email' => 'user1@gmail.com',
//            'password' => Hash::make('123456789'),
//        ]);
//
//        $users = User::all();
//        dd($users);

        Project::query()->create([
            'title' => 'Project One',
            'description' => 'Describe'
        ]);

        dd(Project::all());
        return "Home form controller";
    }
}
