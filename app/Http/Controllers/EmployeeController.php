<?php

namespace App\Http\Controllers;

use App\Data\EmployeeData;
use App\Http\Requests\findbySalaryRequest;
use App\Services\EmployeeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EmployeeController extends Controller
{

    public function __construct(private EmployeeService $employeeService) {
    }

    public function index(): JsonResponse
    {
        $employees = $this->employeeService->getAllemployees();
        return  response()->json($employees);
    }

    public function findbyId(int $id): JsonResponse
    {
        
        $employee = $this->employeeService->findbyId($id);
        return response()->json($employee);
    }

    public function findbyEmail(string $email): JsonResponse
    {
        $employee = $this->employeeService->findbyEmail($email);
        return response()->json($employee);
    }

    public function findBysalary(Request $request)
    {
        $minSalary = $request->input('min_salary');
        $maxSalary = $request->input('max_salary');
        $employee = $this->employeeService->findbySalaryRan($minSalary, $maxSalary);
        return response()->json($employee);
    }
}
