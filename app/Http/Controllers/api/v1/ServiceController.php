<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return Category::with('service.children')->get();
    }

    public function show($id)
    {
        return Category::with('service.children')->find($id);
    }
}
