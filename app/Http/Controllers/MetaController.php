<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




use App\Models\seo;
use App\Models\settings;




class MetaController extends Controller
{
    public function getall()
    {
        return view('index', ['seo'=>seo::get()->toArray(), 'settings'=>settings::get()->toArray()]);
    }
}