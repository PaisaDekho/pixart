<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Model\User;
use Illuminate\Support\Facades\Auth;

class SampleController extends Controller
{
    function index(){
        return view('login');
    }
}
