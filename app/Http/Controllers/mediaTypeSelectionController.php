<?php

namespace AutoPlanner\Http\Controllers;

use Illuminate\Http\Request;

class mediaTypeSelectionController extends Controller
{
  public function index()
  {
      return view('mediaSelection');
  }
}
