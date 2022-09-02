<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class RolesController extends Controller
{

   public function __construct()
    {
        
    // el usuario super-admin se coloca en app/providers/authserviceprovider

    // permisos de ver    
    $this->middleware( 'permission: ver-rol|crear-rol|editar-rol|borrar-rol')->only('index');

    // permisos de crear
    $this->middleware( 'permission: crear-rol', ['only'=>['create','store']] );

    // permisos de crear
    $this->middleware( 'permission: editar-rol', ['only'=>['update','edit']] );

    // permisos de borrar
    $this->middleware( 'permission: borrar-rol', ['only'=>['destroy']] );

    }


    public function index()
    {
        $roles = Role::paginate();
        return view ( 'permisos.roles.index' , compact('roles') );
    }


    public function create()
    {
        $permission = Permission::get();
        return view ( 'permisos.roles.create' , compact('permission') );
    }


    public function store(Request $request)
    {
       $this->validate($request, ['name' => 'required' , 'permission' => 'required']);
       $role = Role::create(['name' => $request->input('name')]);
       $role->syncPermissions($request->input('permission'));

       return redirect()->route('roles.index');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $role            = Role::find($id);
        $permission      = Permission::get();
        $rolePermissions = DB::table('role_has_permissions')
        ->where('role_has_permissions.role_id',$id)
        ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
        ->all();

        return view ( 'permisos.roles.edit' , compact('role','permission','rolePermissions') );

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, ['name' => 'required' , 'permission' => 'required']);
        
        $role =Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index');
    }


    public function destroy($id)
    {
        DB::table('roles')->where('id',$id)->delete();
        return redirect()->route('roles.index');
    }
}
