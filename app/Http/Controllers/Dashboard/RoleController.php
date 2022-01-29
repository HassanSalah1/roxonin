<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\RolesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\RoleStoreRequest;
use App\Http\Requests\Dashboard\RoleUpdateRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use Symfony\Component\HttpFoundation\Response;

class RoleController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(RolesDataTable $dataTable)
  {
    // abort_if(Gate::denies('access_roles'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $breadcrumbs = [
      ['link' => "/", 'name' => "Home"], ['name' => "All Roles"]
    ];
    return $dataTable->render('dashboard.roles.index', compact('breadcrumbs'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    // abort_if(Gate::denies('create_roles'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $breadcrumbs = [
      ['link' => "/", 'name' => "Home"], ['link' => route('roles.index'), 'name' => "Roles"], ['name' => "Create Role"]
    ];
    $permissions = Permission::all();
    return view('dashboard.roles.create', compact('breadcrumbs', 'permissions'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(RoleStoreRequest $request)
  {
    // abort_if(Gate::denies('create_roles'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $role = Role::create($request->except('permissions'));
    $role->syncPermissions($request->input('permissions', []));
    // toastr()->success('Role has been created successfuly', 'Success');
    return redirect()->route('roles.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  Role  $role
   * @return \Illuminate\Http\Response
   */
  public function edit(Role $role)
  {
    // abort_if(Gate::denies('edit_roles'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $breadcrumbs = [
      ['link' => "/", 'name' => "Home"], ['link' => route('roles.index'), 'name' => "Roles"], ['name' => "Edit Role"]
    ];
    $permissions =  Permission::all();
    return view('dashboard.roles.edit', compact('role', 'permissions', 'breadcrumbs'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  Role $role
   * @return \Illuminate\Http\Response
   */
  public function update(RoleUpdateRequest $request, Role $role)
  {
    // abort_if(Gate::denies('edit_roles'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $role->update($request->except('permissions'));
    $role->syncPermissions($request->input('permissions', []));
    // toastr()->success('Role has been updated successfuly', 'Success');
    return redirect()->route('roles.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  Role $role
   * @return \Illuminate\Http\Response
   */
  public function destroy(Role $role)
  {
    // abort_if(Gate::denies('delete_roles'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $role->delete();
    // toastr()->warning('Role has been deleted successfuly', 'Warning');
    return redirect()->route('roles.index');
  }
}
