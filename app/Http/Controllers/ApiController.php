<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    /**
    * ApiController constructor.
    */
    public function __construct()
    {
        $this->middleware('auth'); // All methods must be logged in users.
    }

    public function renderMarkdown(Request $request)
    {
        // Might consider restricing to specific roles (not just all users)
        // $this->validate($request, [
        //     'input' => 'required'
        // ]);
        return markdown($request->input);
    }
}
