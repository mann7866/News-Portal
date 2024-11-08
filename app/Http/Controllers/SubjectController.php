<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Requests\SubjectRequest;
use App\Contracts\Interfaces\SubjectInterface;

class SubjectController extends Controller
{

    private SubjectInterface $interface;
    /**
     * Constructor.
     *
     * @param  App\Contracts\Interfaces\SubjectInterface  $example
     * @return void
     */

    public function __construct(
        SubjectInterface $interface,

    ) {
        $this->interface = $interface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.super-admin.subject.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubjectRequest $request)
    {
        try {
            $this->interface->store($request->validated());
            return to_route('subject.index')->with('success', 'Berhasil Menambahkan Mata Pelajaran');
        } catch (\Throwable $e) {
            return to_route('subject.index')->with('error', 'Gagal Menambahkan Mata Pelajaran' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        try {
            $this->interface->update($subject->id,$request->validated());
            return to_route('subject.index')->with('success', 'Berhasil Menambahkan Mata Pelajaran');
        } catch (\Throwable $e) {
            return to_route('subject.index')->with('error', 'Gagal Menambahkan Mata Pelajaran' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        try {
            $this->interface->delete($subject->id);
            return to_route('subject.index')->with('success', 'Berhasil Menambahkan Mata Pelajaran');
        } catch (\Throwable $e) {
            return to_route('subject.index')->with('error', 'Gagal Menambahkan Mata Pelajaran' . $e->getMessage());
        }
    }
}
