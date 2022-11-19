<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTakeRequest;
use App\Http\Requests\UpdateTakeRequest;
use App\Models\Take;

class TakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTakeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTakeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Take  $take
     * @return \Illuminate\Http\Response
     */
    public function show(Take $take)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Take  $take
     * @return \Illuminate\Http\Response
     */
    public function edit(Take $take)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTakeRequest  $request
     * @param  \App\Models\Take  $take
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTakeRequest $request, Take $take)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Take  $take
     * @return \Illuminate\Http\Response
     */
    public function destroy(Take $take)
    {
        //
    }
}
