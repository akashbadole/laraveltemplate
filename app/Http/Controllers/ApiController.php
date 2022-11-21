<?php

namespace App\Http\Controllers;

use App\Models\apiData;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        // return ['name'=>'akash'];
        $data = apiData::All();
        return $data;
    }
}
