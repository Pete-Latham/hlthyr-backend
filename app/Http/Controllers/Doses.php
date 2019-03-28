<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dose;
use App\User;
use App\Med;


class Doses extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['quantity', 'unit', 'time']);

        $dose = new Dose($data);
        // associate the dose with the med (optional - but nice to use the Laravel one to one in the dose model)
        $user = User::find($request['user_id']);
        $med = Med::find($request['med_id']);

        // associate the dose with the user 
        $user->doses()->save($dose);
        $med->doses()->save($dose);
        return $dose;
    }

    
    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
