<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeDashboardController extends Controller
{
    //Employee Dashboard Page
    public function employeeDashboard()
    {
        return view('employee.employee-dashboard');
    }
}
