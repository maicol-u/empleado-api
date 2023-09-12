<?php

namespace App\Services;

use App\Data\EmployeeData;
use stdClass;

class EmployeeService {

    public function getAllemployees(): array
    {
        return EmployeeData::getDataEmployee();
    }

    public function findbyId(int $id): stdClass
    {
        $employees = EmployeeData::getDataEmployee();
        $employee = [];
        foreach($employees as $employeei){
            if($employeei->id == $id) $employee = $employeei;
        }
        return $employee;
    }

    public function findByEmail(string $email): array
    {
        $employees = EmployeeData::getDataEmployee();
        $employee = array_filter($employees, function ($employeei) use ($email) {
            return str_contains($employeei->email, $email);
        });
        return $employee;
    }

    public function findbySalaryRan(int $minSalary, int $maxSalary): array
    {
        $employees = EmployeeData::getDataEmployee();
        $employee = array_filter($employees, function ($employeei) use ($minSalary, $maxSalary) {
            return $employeei->salary > $minSalary && $employeei->salary < $maxSalary;
        });
        return $employee;
    }

}