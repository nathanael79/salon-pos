<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public const PAGE_NAME = 'Dashboard';

    public function index(){
        return view('dashboard.index',[
            'page_name' => self::PAGE_NAME
        ]);
    }
}
