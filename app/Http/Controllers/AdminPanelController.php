<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function index() 
    {
        return view('pages.adminPanel.adminPanel', []);
    }
    public function deleted() 
    {
        return view('pages.adminPanel.deletePanel', []);
    }
}
