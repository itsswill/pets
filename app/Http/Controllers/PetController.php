<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pets;
use App\Http\Requests;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //gets all pets

        $pets = Pets::all();
        return $pets;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $petName = $request->input('name');
        $petBreed = $request->input('breed');
        $color = $request->input('color');
        $owner = $request->input('owner');


        $pet = new pets;
        $pet->name = $petName;
        $pet->breed = $petBreed;
        $pet->color = $color;
        $pet->owner_id = $owner;
        $pet->save();
    }

    public function getPet($id)
    {

    }

    public function updatePet($id, Request $request)
    {

    }

    public function destroy($id)
    {
        //
    }

}