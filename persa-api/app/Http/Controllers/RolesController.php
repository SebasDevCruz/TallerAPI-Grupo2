<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RolesController extends Controller
{
    private $rules = [
        'name' => 'required|string|max:50',
    ];

    private $traductionAttributes = [
        'name' => 'nombre',
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Roles::all();
        return response()->json($roles, Response::HTTP_OK);
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

        $roles = Roles::create($request->all());
        $response = [
            'message' => 'rol creado exitosamente',
            'roles' => $roles
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Roles $roles)
    {
        return response()->json($roles, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Roles $roles)
    {
        $data = $this->applyValidator($request, $this->rules, $this->traductionAttributes);
        if(!empty($data)){
            return $data;
        }

        $roles->update($request->all());
        $response = [
            'message' => 'Rol actualizado exitosamente',
            'roles' => $roles
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Roles $roles)
    {
        $roles->delete();
        $response = [
            'message' => 'Rol eliminado exitosamente',
            'roles' => $roles
        ];

        return response()->json($response, Response::HTTP_OK);
    }
}
