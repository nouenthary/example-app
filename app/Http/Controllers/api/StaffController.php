<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => ["a", 'b', 'c']
        ]);
    }
}
