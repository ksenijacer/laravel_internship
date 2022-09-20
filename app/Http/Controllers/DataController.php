<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function open()
    {

        return response()->json(['message' => 'Open data for users']);
    }
    public function closed()
    {

        return response()->json(['message' => 'Data for authenticated users']);
    }
}