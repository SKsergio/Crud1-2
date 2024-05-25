<?php

namespace App\Models;

use CodeIgniter\Model;

class EstudianteModel extends Model{
    protected $table = 'estudiantes';
    protected $primaryKey  = 'Carnet';

    protected $allowedFields = ['Carnet','Nombre','Apellido'];//campos permitidos para la actualizacion y eliminacion
    protected $returnType = 'array';

    //este va para mostrar los datos
    public function ListarEstudiantes(){
        $Students = $this->db->query('SELECT * FROM estudiantes');
        return $Students->getResult();
    }
    public function consultarValidacion($Carnet)
    {
        return $this->where('Carnet', $Carnet)->first();
    }
    
}