<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private static array $users = [];

    public function index()
    {
        return response()->json([
            [
                "id" => 1,
                "name" => "Badr"
            ]
        ], 200);
    }

    public function store(Request $request)
    {
        return response()->json([
            "id" => 2,
            "name" => $request->name
        ], 201);
    }
}
