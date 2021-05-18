<?php

namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('domicilio')->limit(10)->get();
        return response()->json($users);
    }
}
