<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.admin.index');
    }
}
