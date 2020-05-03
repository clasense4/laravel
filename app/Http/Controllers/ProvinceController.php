<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProvinceController extends Controller
{
    public function getAllProvince()
    {
        $provinces = DB::table('province')->get();

        return response()->json([
            'message' => 'success',
            'data' => $provinces
        ], 200);
    }

    public function filterProvince(Request $request)
    {
        $filter = strtoupper($request->filter);
        $provinces = DB::table('province')->where('name', 'like', "%$filter%")->get();

        return response()->json([
            'message' => 'success',
            'data' => $provinces
        ], 200);
    }
}