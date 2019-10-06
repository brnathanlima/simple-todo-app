<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users', 'User');
        
        return view('users', compact('users'));
    }

    public function store()
    {
        App::get('database')->insert('users', [
            'id' => null,
            'name' => $_POST['name']
        ]);

        return redirect('practitioner/users');
    }
}