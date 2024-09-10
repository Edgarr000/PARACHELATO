<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('estudiantes.list', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'rne' => ['required'],
            'nombres' => ['required'],
            'apellidos' => ['required'],
            'sexo' => ['required']
        ]);

        Student::create([
            'rne' => $request->rne,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'sexo' => $request->sexo,
            'fechanac' => $request->fechanac,
            'colegio' => $request->colegio,
            'carrera' => $request->carrera,
            'curso' => $request->curso,
            'jornada' => $request->jornada,
            'seccion' => $request->seccion,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()
            ->route('estudiantes.index')
            ->with(['success' => 'La informacion del estudiante ha sido almacenada']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::FindOrFail($id);
        return view('estudiantes.delete', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::FindOrFail($id);
        return view('estudiantes.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'rne' => ['required'],
            'nombres' => ['required'],
            'apellidos' => ['required'],
            'sexo' => ['required']
        ]);
        $student = Student::findOrfail($id);
        $student->rne = $request->rne;
        $student->nombres = $request->nombres;
        $student->apellidos = $request->apellidos;
        $student->sexo = $request->sexo;
        $student->fechanac = $request->fechanac;
        $student->colegio = $request->colegio;
        $student->curso = $request->curso;
        $student->jornada = $request->jornada;
        $student->seccion = $request->seccion;

        $student->save();

        return redirect()
            ->route('estudiantes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()
            ->route('estudiantes.index');
    }

    public function getStudentsByCollege($colegio)
    {
        $students = Student::where('colegio', $colegio)->orderBy('sexo')->orderBy('nombres')->get();
        return response()->json([
            'status' => 'ok',
            'total' => count($students),
            'estudiantes' => $students
        ], 200);
    }


    public function getStudentsByCarrera($carrera)
    {
        $students = Student::where('carrera', $carrera)->orderBy('sexo')->orderBy('nombres')->get();
        return response()->json([
            'status' => 'ok',
            'total' => count($students),
            'estudiantes' => $students
        ], 200);
    }

    public function getStudentsByCurso($curso)
    {
        $students = Student::where('curso', $curso)->orderBy('sexo')->orderBy('nombres')->get();
        return response()->json([
            'status' => 'ok',
            'total' => count($students),
            'estudiantes' => $students
        ], 200);
    }

    public function getStudentsByCCCJS($colegio, $carrera, $curso, $jornada, $seccion)
    {
        $students = Student::where('colegio', $colegio)
            ->where('carrera', $carrera)
            ->where('curso', $curso)
            ->where('jornada', $jornada)
            ->where('seccion', $seccion)
            ->orderBy('sexo')->orderBy('nombres')->get();
        return response()->json([
            'status' => 'ok',
            'total' => count($students),
            'estudiantes' => $students
        ], 200);
    }

    public function countByJornada()
    {
        $students = Student::select(
            DB::raw('jornada, count(jornada) as Total')
        )->groupBy('jornada')->get();

        return response()->json([
            'status' => 'ok',
            'total' => count($students),
            'estudiantes' => $students
        ], 200);
    }

    public function countByJornadaXColegio($colegio)
    {
        $students = Student::select(
            DB::raw('jornada, count(jornada) as Total')
        )->where('colegio', $colegio)->groupBy('jornada')->get();

        return response()->json([
            'status' => 'ok',
            'total' => count($students),
            'estudiantes' => $students
        ], 200);
    }
}
