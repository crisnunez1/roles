<?php

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name'            => 'Navegar usuarios',
            'slug'            => 'users.index',
            'description'     => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'            => 'Ver detalle de usuario',
            'slug'            => 'users.show',
            'description'     => 'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
            'name'            => 'Edición de usuario',
            'slug'            => 'users.edit',
            'description'     => 'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
            'name'            => 'Eliminar usuarios',
            'slug'            => 'users.destroy',
            'description'     => 'Eliminar cualquier usuario del sistema',
        ]);

        //Roles
        Permission::create([
            'name'            => 'Navegar roles',
            'slug'            => 'roles.index',
            'description'     => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'name'            => 'Ver detalle de rol',
            'slug'            => 'roles.show',
            'description'     => 'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
            'name'            => 'Creación de roles',
            'slug'            => 'roles.create',
            'description'     => 'Crear cualquier rol del sistema',
        ]);
        Permission::create([
            'name'            => 'Edición de rol',
            'slug'            => 'roles.edit',
            'description'     => 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
            'name'            => 'Eliminar roles',
            'slug'            => 'roles.destroy',
            'description'     => 'Eliminar cualquier rol del sistema',
        ]);

        //Products
        Permission::create([
            'name'            => 'Navegar Productos',
            'slug'            => 'products.index',
            'description'     => 'Lista y navega todos los productos del sistema',
        ]);
        Permission::create([
            'name'            => 'Ver detalle de producto',
            'slug'            => 'products.show',
            'description'     => 'Ver en detalle cada producto del sistema',
        ]);
        Permission::create([
            'name'            => 'Creación productos',
            'slug'            => 'products.create',
            'description'     => 'Crear cualquier producto en sistema',
        ]);
        Permission::create([
            'name'            => 'Edición de producto',
            'slug'            => 'products.edit',
            'description'     => 'Editar cualquier dato de un producto del sistema',
        ]);
        Permission::create([
            'name'            => 'Eliminar productos',
            'slug'            => 'products.destroy',
            'description'     => 'Eliminar cualquier producto del sistema',
        ]);

    }
}
