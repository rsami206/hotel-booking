<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request) { /* Validate and create user */ }
    public function login(Request $request) { /* Check credentials and login */ }
    public function logout(Request $request) { /* Logout */ }
}
