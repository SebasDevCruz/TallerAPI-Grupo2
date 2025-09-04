<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Client\Response as ClientResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CourseController extends Controller
{
    private $rules = [
        'number_group' => 'required|numeric|max:99999999999999999999',
        'shift' => 'required|string|max:15',
        'trimester' => 'required|string|max:1',
        'year' => 'required|numeric|min:4|max:99999',
        'status' => 'required|string|max:50',
        'career_id' => 'required|numeric|max:99999999999999999999',

    ];

    private $traductionAttributes = [
        'number_group' => 'Número de grupo',
        'shift' => 'Jornada',
        'trimester' => 'Trimestre',
        'year' => 'Año',
        'status' => 'Estado',
        'career_id' => 'Carrera',

    ];


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        $courses->load(['career']);
        return response()->json($courses,Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->applyValidator($request, $this->rules, $this->traductionAttributes);
        if(!empty($data)) {
            return $data;
        }
        $course = Course::create($request->all());
        $response = [
            'message' => 'Grupo creado exitosamente',
            'course' => $course
        ];
        return response()->json($response, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        $course->load(['career']);
        return response()->json($course,Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $data = $this->applyValidator($request, $this->rules, $this->traductionAttributes);
        if(!empty($data)) {
            return $data;
        }
        $course->update($request->all());
        $response = [
            'message' => 'Curso actualizado exitosamente',
            'course' => $course
        ];
        return response()->json($response,Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course){
        $course->delete();
        $response = [
            'message' => 'Curso eliminado exitosamente',
            'course' => $course
        ];
        return response()->json($response, Response::HTTP_OK);
    }
}
