<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemoAppointment;
use Yajra\DataTables\Facades\DataTables;

class DemoAppointmentController extends Controller
{

    public function index(){
        $datatables = DemoAppointment::query();
		return DataTables::of($datatables)->toJson();
    }
    public function create()
    {
        return view('demo'); // Cambia 'demo.appointment-form' por tu ruta de vista correcta
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pais' => 'nullable|string|max:255',
            'organizacion' => 'required|string|max:255',
            'posicion' => 'required|string|max:255',
        ]);

        // Crear un nuevo registro en la base de datos
        $demoAppointment = DemoAppointment::create($request->all());

        // Verificar si el registro se ha guardado correctamente
        if ($demoAppointment) {

            return response()->json(['error' => 'Se guardo exitosamente'], 200);
        } else {
            return response()->json(['error' => 'No se guardó el demo'], 403);
        }
    }
}
