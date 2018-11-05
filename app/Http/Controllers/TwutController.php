<?php

namespace App\Http\Controllers;

use App\Twut;
use Illuminate\Http\Request;

class TwutController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        $this.validate(request(),
            [
                'body' => 'required'
            ]
        );
        Twut::create([
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);
        return redirect('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Twut  $twut
     * @return \Illuminate\Http\Response
     */
    public function show(Twut $twut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Twut  $twut
     * @return \Illuminate\Http\Response
     */
    public function edit(Twut $twut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Twut  $twut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Twut $twut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Twut  $twut
     * @return \Illuminate\Http\Response
     */
    public function destroy(Twut $twut)
    {
        //
    }
}
