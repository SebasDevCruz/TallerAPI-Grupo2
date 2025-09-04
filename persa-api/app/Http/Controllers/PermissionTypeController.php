<?php

namespace App\Http\Controllers;

use App\Models\PermissionType;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PermissionTypeController extends Controller
{
    private $rules = [
        'name' => 'required|string|max:255',
    ];

    private $traductionAttributes = [
        'name' => 'nombre',
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permission_types = PermissionType::all();
        return response()->json($permission_types, Response::HTTP_OK);
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

        $permission_type = PermissionType::create($request->all());
        $response = [
            'message' => 'Tipo de permiso creado exitosamente',
            'permissionType' => $permission_type
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(PermissionType $permission_type)
    {
        return response()->json($permission_type, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PermissionType $permission_type)
    {
        $data = $this->applyValidator($request, $this->rules, $this->traductionAttributes);
        if(!empty($data)){
            return $data;
        }

        $permission_type->update($request->all());
        $response = [
            'message' => 'Tipo de permiso actualizado exitosamente',
            'permissionType' => $permission_type
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PermissionType $permission_type)
    {
        $permission_type->delete();
        $response = [
            'message' => 'Tipo de permiso eliminado exitosamente',
            'permissionType' => $permission_type
        ];

        return response()->json($response, Response::HTTP_OK);
    }
}
