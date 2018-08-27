<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
    * AdminController constructor.
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $roles = ['webmaster', 'treasurer'];
        abort_unless(auth()->user()->authoriseRoles($roles), 403);
        return view('admin.dashboard');
    }
}
