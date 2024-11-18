<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Services\EmployeeService;
use App\Http\Requests\EmployeeRequest;
use App\Contracts\Interfaces\EmployeeInterface;

class EmployeeController extends Controller
{

    private EmployeeInterface $interface;
    private EmployeeService $service;

    /**
     * Constructor.
     *
     * @param  App\Contracts\Interfaces\EmployeeJobInterface  $example
     * @return void
     */
    public function __construct(
        EmployeeInterface $interface,
        EmployeeService $service,
    ) {
        $this->interface = $interface;
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = $this->interface->get();
        return view ('pages.super-admin.employee.index', ['employees' => $employees]);

        dd($employees);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pages.super-admin.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        try {
            $data = $this->service->store($request);
            $this->interface->store($data);
            return redirect()->route('employee.index')->with('success','Berhasil menambah organisasi');
        } catch (\Throwable $e) {
            return redirect()->route('employee.index')->with('error','Gagal menambah organisasi' . $e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view ('pages.super-admin.employee.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view ('pages.super-admin.employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        try {
            $data = $this->service->update($request, $employee);
            $this->interface->update($employee->id, $data);
            return redirect()->route('employee.index')->with('success','Berhasil mengedit organisasi');
        } catch (\Throwable $e) {
            return redirect()->route('employee.index')->with('error','Gagal mengedit organisasi' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
