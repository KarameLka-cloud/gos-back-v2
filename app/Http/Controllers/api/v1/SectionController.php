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
//    public function index(Request $request)
//    {
//        $id = $request->get('id');
//        return Section::all();
//    }
//
//    public function show(Request $request)
//    {
//        $id = $request->input('id');
//        $section = Section::find($id);
//        return response()->json($section);
//    }
}
