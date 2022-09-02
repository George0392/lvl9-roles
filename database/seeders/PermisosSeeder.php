<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermisosSeeder extends Seeder
{

    public function run()
    {

      // elimina la cache de roles creados anteriormente
        app()['cache']->forget('spatie.permission.cache');




       $permisos = [

        // tabla roles
       'ver-rol',
       'crear-rol',
       'editar-rol',
       'borrar-rol',

       // tabla Blog
       'ver-blog',
       'crear-blog',
       'editar-blog',
       'borrar-blog',

       ]; 

       foreach($permisos as $permiso){
        Permission::create(['name'=>$permiso]);

       }


       $roles = [
         
       'Administrador',
       'Gerente',
       'Vendedor',

       ]; 

       foreach($roles as $role){
        Role::create(['name'=>$role]);

       }


    }
}
