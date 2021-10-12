<?php
use App\Models\Pengguna;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolesAndPermissionsSeeder extends Seeder
{
	private $permissionsByRole = [
			
		'administrator' => [
			'home/list', 'agenda/list', 'agenda/view', 'agenda/add', 'agenda/store', 'agenda/edit', 'agenda/delete', 'agenda/importdata', 'pelanggan/list', 'pelanggan/view', 'pelanggan/add', 'pelanggan/store', 'pelanggan/edit', 'pelanggan/delete', 'pelanggan/importdata', 'pengguna/list', 'pengguna/view', 'pengguna/add', 'pengguna/store', 'pengguna/edit', 'pengguna/delete', 'pengguna/importdata', 'presensi/list', 'presensi/view', 'presensi/add', 'presensi/store', 'presensi/edit', 'presensi/delete', 'presensi/importdata', 'account/list', 'account/edit', 'model_has_roles/list', 'model_has_roles/view', 'model_has_roles/add', 'model_has_roles/store', 'model_has_roles/edit', 'model_has_roles/delete', 'presensi/attend', 'presensi/attend_store', 'presensi/leave', 'presensi/leave_store', 'dinas/list', 'dinas/view', 'dinas/add', 'dinas/store', 'dinas/edit', 'dinas/delete', 'dinas/back', 'dinas/back_store', 'inventaris/list', 'inventaris/view', 'inventaris/add', 'inventaris/store', 'inventaris/edit', 'inventaris/delete'
		], 
		'user' => [
			'home/list', 'agenda/list', 'agenda/view', 'pelanggan/list', 'pelanggan/view', 'presensi/list', 'presensi/view', 'presensi/add', 'presensi/store', 'account/list', 'account/edit', 'presensi/attend', 'presensi/attend_store', 'presensi/leave', 'presensi/leave_store', 'dinas/list', 'dinas/view', 'dinas/back', 'dinas/back_store'
		]
	];
    public function run()
    {
        $tableNames = config('permission.table_names');

		Schema::disableForeignKeyConstraints();

        DB::table($tableNames['roles'])->truncate();
        DB::table($tableNames['permissions'])->truncate();
		DB::table($tableNames['role_has_permissions'])->truncate();
		
		Schema::enableForeignKeyConstraints();
		
		app()['cache']->forget('spatie.permission.cache');
		app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

		$this->syncPermissions();
		$this->syncRoles();
		$this->syncUsersRole('user');
    }
	function syncRoles(){
		foreach ($this->permissionsByRole as $rolename => $permissions) {
			$role = Role::create(['name' => $rolename]);
			$role->givePermissionTo($permissions);
		}
	}

	function syncPermissions(){
		$permissions = [];

		foreach ($this->permissionsByRole as $rolename => $rolePermissions) {
			$permissions = array_merge($permissions, $rolePermissions);
		}

		$insertData = [];
		foreach($permissions as $name){
			$insertData[] = ['name'=>$name, 'guard_name' => 'web'];
		}
		Permission::insert($insertData);
	}

	function syncUsersRole($role){
		$users = Pengguna::all();
		foreach($users as $user){
			$user->syncRoles($role);
		}
	}
}
