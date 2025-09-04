<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LocationController extends Controller
{

    private $rules = [
        'name' => 'required|string|max:50',
        'address' => 'required|string|max:50',
    ];

    private $traductionAttributes = [
        'name' => 'nombre',
        'address' => 'dirección',
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::all();
        return response()->json($locations, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->applyValidator($request, $this->rules, $this->traductionAttributes);
        if (!empty($data)) {
            return $data;
        }

        $location = Location::create($request->all());
        $response = [
            'message' => 'Sede creada exitosamente',
            'location' => $location
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        return response()->json($location, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        $data = $this->applyValidator($request, $this->rules, $this->traductionAttributes);
        if (!empty($data)) {
            return $data;
        }

        $location->update($request->all());
        $response = [
            'message' => 'Sede actualizada exitosamente',
            'location' => $location
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        $location -> delete();

        $response = [
            'message' => 'Sede eliminada exitosamente',
            'location' => $location
        ];

        return response()->json($response, Response::HTTP_OK);
    }
}
