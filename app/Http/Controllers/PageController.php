<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
// Define the Home page
public function index()
{
  return view('welcome');
}

// Define the about us view
public function aboutus()
{
  return view('/aboutus');
}

// Define the web design view
public function webdesign()
{
  return view('services.webdesign');
}
// Define the contact us view
public function contact()
{
  return view('contactus');
}
}
