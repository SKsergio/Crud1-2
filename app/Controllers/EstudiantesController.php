<?php

namespace App\Controllers;

use App\Models\EstudianteModel;

class EstudiantesController extends BaseController
{
    public function listar(): string
    {
        $model = new EstudianteModel();
        $datos = $model->ListarEstudiantes();

        $mensaje = session('mensaje');

        $data = [
            'datos' => $datos,
            'mensaje' => $mensaje
        ];
        return view('estudiantes',$data);
    }

   public function agregar(){

    return view('AgregarEstudiante');
   }

   public function insertar()
   {
       $estudianteModel = new EstudianteModel();
   
       $data = [
           'Carnet' => $this->request->getPost('Carnet'),
           'Nombre' => $this->request->getPost('Nombre'),
           'Apellido' => $this->request->getPost('Apellido')
       ];
   
       if ($estudianteModel->consultarValidacion($data['Carnet'])) {
           //si ya exixste muestra erroir
           return redirect()->back()->with('error', 'Ya existe un estudiante con este carnet');
       } else {
           // Insertar el nuevo estudiante
           $estudianteModel->insert($data);
           return redirect()->to(base_url('/060223'))->with('success', 'Datos insertados correctamente');
       }
   }
   
}
