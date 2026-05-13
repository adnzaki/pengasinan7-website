<?php namespace App\Controllers;

use App\Models\EmployeeModel;

class Employee extends BaseController
{
    protected EmployeeModel $employeeModel;

    public function __construct()
    {
        $this->employeeModel = new EmployeeModel();
    }

    public function teachers()
    {
        $schoolInfo = $this->schoolInfo();
        $employee = $this->employeeModel->where('type', 'teacher')->findAll();

        $data = [
            'title'         => 'Pendidik',
            'schoolInfo'    => $schoolInfo,
            'titleImage'    => 'employee/teachers.webp',
            'employees'     => $employee
        ];

        $views = [
            view('profile/title', $data),
            view('profile/employee/list'),
        ];

        $data['contents'] = implode('', $views);

        return view('layout/main', $data);
    }

    public function staff()
    {
        $schoolInfo = $this->schoolInfo();
        $employee = $this->employeeModel->where('type', 'staff')->findAll();

        $data = [
            'title'         => 'Tenaga Kependidikan',
            'schoolInfo'    => $schoolInfo,
            'titleImage'    => 'employee/staff.webp',
            'employees'     => $employee
        ];

        $views = [
            view('profile/title', $data),
            view('profile/employee/list'),
        ];

        $data['contents'] = implode('', $views);

        return view('layout/main', $data);
    }
}