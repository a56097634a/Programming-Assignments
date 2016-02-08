<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
	public function greet($name)
	{
		return "Hello from ". $name;
	}
	public function index()
	{
		return "Hello from index page";
	}	
}
