<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
      public function getAdmin()
    {
        return view('admin.index');
    }
}
