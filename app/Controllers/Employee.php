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
            'employees'     => $employee,
            'og_meta'       => [
                'title' => 'Pendidik - SDN Pengasinan VII',
                'image' => 'employee/teachers.webp'
            ]
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
            'employees'     => $employee,
            'og_meta'       => [
                'title' => 'Tenaga Kependidikan - SDN Pengasinan VII',
                'image' => 'employee/staff.webp'
            ]
        ];

        $views = [
            view('profile/title', $data),
            view('profile/employee/list'),
        ];

        $data['contents'] = implode('', $views);

        return view('layout/main', $data);
    }

    public function detail(string $slug)
    {
        $schoolInfo = $this->schoolInfo();
        $employee = $this->employeeModel->where('slug', $slug)->first();

        if (!$employee) {
            //throw new \CodeIgniter\Exceptions\PageNotFoundException("PTK dengan slug '$slug' tidak ditemukan.");
            $error = new \App\Controllers\Error;
            return $error->index();
        }

        $data = [
            'title'         => $employee['name'],
            'schoolInfo'    => $schoolInfo,
            'employee'      => $employee,
            'og_meta'       => [
                'title' => $employee['name'] ?? 'PTK' . ' - SDN Pengasinan VII',
                'image' => $employee['photo']
            ]
        ];

        $views = [
            view('profile/employee/detail', $data),
        ];

        $data['contents'] = implode('', $views);

        return view('layout/main', $data);
    }
}