<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\UserResource;


class Users extends Controller
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


    public function dosesIndex( $user )
    {
        $ourUser = User::find($user);
        $ourDoses = $ourUser->doses;
        $doseList = array();
        foreach ($ourDoses as $ourDose) {
            $thisDose = array(
                'id' => $ourDose->id,
                'med_id' => $ourDose->med_id,
                'quantity' => $ourDose->quantity,
                'unit' => $ourDose->unit,
                'time' => $ourDose->time
            );
            $doseList[$ourDose->id] = $thisDose;
        }
        return $doseList;
    }


     
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( User $user )
    {
        return new UserResource($user);
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

    public function medsIndex( $user )
    {
        // For a given user, return a list of all the IDs of
        // the meds currently in use by that user.
        $ourUser = User::find($user);
        $ourMeds = $ourUser->meds;
        $medList = array();
        foreach ($ourMeds as $ourMed) {
            $thisMed = array(
                "id" => $ourMed->id,
                "name" => $ourMed->name,
                "stock" => $ourMed->pivot->stock,
                "desc" => $ourMed->desc,
                "warnings" => $ourMed->warnings,
                "medColour" => $ourMed->pivot->medColour
            );
            $medList[$ourMed->id] = $thisMed;
        }
        return $medList;
    }

    public function storeMed(User $user, Request $request)
    {
        $user->meds()->detach($request['id']);
        $user->meds()->attach($request['id'], ['stock'=>$request['stock'], 'medColour'=>$request['medColour']]);

        return $user->meds;


        
    }

}
