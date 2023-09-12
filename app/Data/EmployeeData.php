<?php

namespace App\Data;

use Illuminate\Support\Facades\File;

class EmployeeData {

    static function getDataEmployee(){
        $path = storage_path('app\empleados.json');
        $json = File::get($path);
        $employees = json_decode($json);
        return $employees;
    }

}

