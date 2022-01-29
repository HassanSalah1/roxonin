<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\PermissionsDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\Dashboard\PermissionStoreRequest;
use App\Http\Requests\Dashboard\PermissionUpdateRequest;

class PermissionController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(PermissionsDataTable $dataTable)
  {
    // abort_if(Gate::denies('access_permissions'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $breadcrumbs = [
      ['link' => "/", 'name' => "Home"], ['name' => "All Permission"]
    ];
    return $dataTable->render('dashboard.permissions.index', compact('breadcrumbs'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    // abort_if(Gate::denies('create_permissions'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $breadcrumbs = [
      ['link' => "/", 'name' => "Home"], ['link' => route('permissions.index'), 'name' => "Permissions"], ['name' => "Create Permission"]
    ];
    return view('dashboard.permissions.create', compact('breadcrumbs'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(PermissionStoreRequest $request)
  {
    // abort_if(Gate::denies('create_permissions'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    Permission::create($request->all());
    // toastr()->success('Permission has been created successfuly', 'Success');
    return redirect()->route('permissions.index');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  Permission $permission
   * @return \Illuminate\Http\Response
   */
  public function edit(Permission $permission)
  {
    // abort_if(Gate::denies('edit_permissions'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $breadcrumbs = [
      ['link' => "/", 'name' => "Home"], ['link' => route('permissions.index'), 'name' => "Permissions"], ['name' => "Edit Permission"]
    ];
    return view('dashboard.permissions.edit', compact('permission'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  Permission $permission
   * @return \Illuminate\Http\Response
   */
  public function update(PermissionUpdateRequest $request, Permission $permission)
  {
    // abort_if(Gate::denies('edit_permissions'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $permission->update($request->all());
    // toastr()->success('Permission has been updated successfuly', 'Success');
    return redirect()->route('permissions.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  Permission $permission
   * @return \Illuminate\Http\Response
   */
  public function destroy(Permission $permission)
  {
    // abort_if(Gate::denies('delete_permissions'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $permission->delete();
    // toastr()->warning('Permission has been deleted successfuly', 'Warning');
    return redirect()->route('permissions.index');
  }
}
