<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $main = "hoangvanduong";
        $login = "login";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $login = "login";
        $gas = "gas okla";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $login = "login";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show = "failed";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cart = "cart 2";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cart = "ko";
    }
}
