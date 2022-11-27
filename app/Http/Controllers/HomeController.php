<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Member;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $members= Member::all();
        $avatars= Avatar::all();
        return view ('home', compact('members', 'avatars'));
    }

}
