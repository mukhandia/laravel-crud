<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class WelcomeController extends Controller
{
    public function Welcome()
    {
        return View('welcome');
    }
}
