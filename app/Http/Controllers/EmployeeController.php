<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

use App\Http\Resources\Employee as EmployeeResource;

class EmployeeController extends Controller {

    public function index()
    {
        $importedData =  Employee::all();
        return response()->json(EmployeeResource::collection($importedData));
    }

    public function create()
    {
        return view('employee.create');
    }
}
