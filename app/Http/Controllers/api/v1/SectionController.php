<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Support\Facades\Request;

class SectionController extends Controller
{
    public function index()
    {
        return Section::with('children')->get();
    }
}
