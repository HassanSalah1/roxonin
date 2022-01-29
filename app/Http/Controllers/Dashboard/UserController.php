<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\UserStoreRequest;
use App\Http\Requests\Dashboard\UserUpdateRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(UsersDataTable $dataTable)
  {
    // abort_if(Gate::denies('access_users'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $breadcrumbs = [
      ['link' => "/", 'name' => "Home"], ['name' => "All Users"]
    ];
    return $dataTable->render('dashboard.users.index', compact('breadcrumbs'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    // abort_if(Gate::denies('create_users'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $breadcrumbs = [
      ['link' => "/", 'name' => "Home"], ['link' => route('users.index'), 'name' => "Users"], ['name' => "Create User"]
    ];
    $roles = Role::all();
    return view('dashboard.users.create', compact('roles', 'breadcrumbs'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(UserStoreRequest $request)
  {
    // abort_if(Gate::denies('create_users'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $data = request()->except('roles', 'image');
    $data['password'] = Hash::make($request->password);
    $data['email_verified_at'] = Carbon::now();
    $data['status'] = 1;

    $user = User::create($data);
    if ($request->roles) {
      $user->syncRoles($request->roles);
      $user->syncPermissions($user->getPermissionsViaRoles($request->roles));
    } else {
      $user->assignRole('user');
    }
    // toastr()->success('User has been created successfuly', 'Success');
    return redirect()->route('users.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  User  $user
   * @return \Illuminate\Http\Response
   */
  public function show(User $user)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  User  $user
   * @return \Illuminate\Http\Response
   */
  public function edit(User $user)
  {
    // abort_if(Gate::denies('edit_users'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $breadcrumbs = [
      ['link' => "/", 'name' => "Home"], ['link' => route('users.index'), 'name' => "Users"], ['name' => "Edit User"]
    ];
    $roles = Role::all();
    return view('dashboard.users.edit', compact('user', 'roles', 'breadcrumbs'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  User  $user
   * @return \Illuminate\Http\Response
   */
  public function update(UserUpdateRequest $request, User $user)
  {
    // abort_if(Gate::denies('edit_users'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $data = request()->except('roles', 'image');
    if ($request->password) {
      $data['password'] = Hash::make($request->password);
    } else {
      unset($data['password']);
    }
    $data['status'] = 1;

    $user->update($data);
    $user->syncRoles($request->roles);
    $user->syncPermissions($user->getPermissionsViaRoles($request->roles));
    // toastr()->success('User has been updated successfuly', 'Success');
    return redirect()->route('users.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  User  $user
   * @return \Illuminate\Http\Response
   */
  public function destroy(User $user)
  {
    // abort_if(Gate::denies('delete_users'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $user->delete();
    // toastr()->warning('User has been updated successfuly', 'Warning');
    return redirect()->back();
  }

  /**
   * Form of add one or more specified permission to user.
   *
   * @param  User  $user
   * @return \Illuminate\Http\Response
   */
  public function editPermission(User $user)
  {
    // abort_if(Gate::denies('edit_users'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $breadcrumbs = [
      ['link' => "/", 'name' => "Home"], ['link' => route('users.index'), 'name' => "Users"], ['name' => "Edit User Permissions"]
    ];
    $user->load('permissions');
    $permissions = Permission::all();
    return view('dashboard.users.permissions', compact('user', 'permissions', 'breadcrumbs'));
  }

  /**
   * Add one or more specified permission to user.
   *
   * @param  User  $user
   * @return \Illuminate\Http\Response
   */
  public function updatePermission(Request $request, User $user)
  {
    // abort_if(Gate::denies('edit_users'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $user->syncPermissions($request->permissions);
    // toastr()->success('User permissions has been updated successfuly', 'Success');
    return redirect()->route('users.index');
  }
}
