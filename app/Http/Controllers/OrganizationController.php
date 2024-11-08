<?php

namespace App\Http\Controllers;

use App\Models\organization;
use Illuminate\Http\Request;
use App\Http\Requests\OrganizationRequest;
use App\Contracts\Interfaces\OrganizationInterface;

class OrganizationController extends Controller
{

    private OrganizationInterface $interface;
      /**
     * Constructor.
     *
     * @param  App\Contracts\Interfaces\SubjectInterface  $example
     * @return void
     */
    public function __construct(
        OrganizationInterface $interface,
    ){
        $this->interface =$interface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizations = $this->interface->get();
        return view('pages.super-admin.organization.index', compact('organizations'));
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
    public function store(OrganizationRequest $request)
    {
        try {
            $this->interface->store($request->validated());
            return redirect()->route('organization.index')->with('success','Berhasil menambah organisasi');
        } catch (\Throwable $e) {
            return redirect()->route('organization.index')->with('error','Gagal menambah organisasi' . $e->getMessage());
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(organization $organization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(organization $organization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrganizationRequest $request, organization $organization)
    {
        try {
            $this->interface->update($organization->id, $request->validated());
            return redirect()->route('organization.index')->with('success','Berhasil memperbarui organisasi');
        } catch (\Throwable $e) {
            return redirect()->route('organization.index')->with('error','Gagal memperbarui organisasi' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(organization $organization)
    {
        try {
            $this->interface->delete($organization->id);
            return redirect()->route('organization.index')->with('success','Berhasil menghapus organisasi');
        } catch (\Throwable $e) {
            return redirect()->route('organization.index')->with('error','Gagal menghapus organisasi' . $e->getMessage());
        }
    }
}
