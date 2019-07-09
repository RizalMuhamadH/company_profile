<?php

namespace App\Http\Controllers;

use App\User;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index');
    }

    public function getUsers()
    {
        return Datatables::of(User::get())->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::orderBy('name', 'ASC')->get();
        return view('admin.users.create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|string|max:100',
            'username' => 'required|string|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required|string|exists:roles,name',
        ]);

        $user = User::create([
            'username' => $data['username'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $user->assignRole($data['role']);
        return redirect(route('users.index'))->with(['success' => 'Berhasil ditambahkan']);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'name' => 'required|string|max:100',
            'username' => 'required|string|max:100',
            'email' => 'required|email|exists:users,email',
            'password' => 'nullable|min:6',
        ]);

        $user = User::findOrFail($id);
        $password = !empty($data['password']) ? Hash::make($data['password']) : $user->password;

        $user->update([
            'name' => $data['name'],
            'username' => $data['username'],
            'password' => $password,
        ]);

        return redirect(route('users.index'))->with(['success' => 'Berhasil diperbaharui']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return json_encode(array('status' => 200));
    }

    public function rolePermission(Request $request)
    {
        $role = request()->get('role');

        //default, set dua buah variable nilai null
        $permissions = [];
        $hasPermission = [];

        //mengambil data role
        $roles = Role::all()->pluck('name');

        if (!empty($role)) {
            //select role berdasarkan name
            $getRole = Role::findByName($role);

            //query untuk mengambil permission yang telah dimiliki oleh role terkait
            $hasPermission = DB::table('role_has_permissions')
                ->select('permissions.name')
                ->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
                ->where('role_id', $getRole->id)->get()->pluck('name')->all();

            $permissions = Permission::all()->pluck('name');
        }

        return view('admin.users.role_permission', compact('roles', 'permissions', 'hasPermission'));
    }

    public function addPermission(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|string|unique:permissions',
        ]);

        $permission = Permission::create([
            'name' => $data['name'],
        ]);

        return redirect()->back();
    }

    public function setRolePermission(Request $request, $role)
    {
        $data = Role::findByName($role);

        //fungsi syncPermission akan menghapus semua permissio yg dimiliki role tersebut
        //kemudian di-assign kembali sehingga tidak terjadi duplicate data
        $data->syncPermissions(request()->permission);

        return redirect()->back()->with(['success' => 'Permission to Role Saved!']);
    }

    public function roles(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all()->pluck('name');
        return view('admin.users.roles', compact('user', 'roles'));
    }

    public function setRole(Request $request, $id)
    {
        $data = request()->validate([
            'role' => 'required'
        ]);

        $user = User::findOrFail($id);
        $user->syncRoles($data['role']);
        return redirect()->back()->with(['success' => 'Role sudah di set']);
    }
}
