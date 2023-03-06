<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', ['employees'=>$employees]);
    }
    public function search(Request $request)
    {
        $employee_name_like = $request->input('employee_name_like');
        $employees = Employee::where('employee_name', 'like', "$employee_name_like%")->get();
        $employees = Employee::where('employee_name', 'like', "%$employee_name_like")->get();
        $employees = Employee::where('employee_name', 'like', "%$employee_name_like%")->get();
        return view('employees.index', ['employees'=>$employees]);
    }
}
