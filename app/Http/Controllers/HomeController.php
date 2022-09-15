<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;

class HomeController extends Controller
{
    public function index() {
        return response('index');
    }

    public function create() {
        // 
    }

    public function store(StoreRequest $request) {
        return response('store');
    }
}

