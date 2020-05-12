<?php

use Illuminate\Database\Seeder;
use App\User;
use App\ClassUser;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role_super_admin = ClassUser::where('ClassUser', 'Super Admin')->first();
        $user1 = new User([
        	'nama' => 'Super Admin',
        	'alamat' => 'Indonesia',
        	'telp' => '0211001001',
        	'email' => 'superadmin@test.com',
            'password' => Hash::make('asd'),
        ]);
        $role_super_admin->users()->save($user1);

        $role_owner = ClassUser::where('ClassUser', 'Owner')->first();
        $user2 = new User([
        	'nama' => 'Owner',
        	'alamat' => 'Indonesia',
        	'telp' => '0211001002',
        	'email' => 'owner@test.com',
            'password' => Hash::make('asd'),
        ]);
        $role_owner->users()->save($user2);

        $role_manager = ClassUser::where('ClassUser', 'Manager')->first();
        $user3 = new User([
            'nama' => 'Manager',
            'atasan_id' => 2,
        	'alamat' => 'Indonesia',
        	'telp' => '0211001003',
        	'email' => 'manager@test.com',
            'password' => Hash::make('asd'),
        ]);
        $role_manager->users()->save($user3);
        
        $role_admin = ClassUser::where('ClassUser', 'Admin')->first();
        $user4 = new User([
            'nama' => 'Admin',
            'atasan_id' => 2,
        	'alamat' => 'Indonesia',
        	'telp' => '0211001004',
        	'email' => 'admin@test.com',
            'password' => Hash::make('asd'),
        ]);
        $role_admin->users()->save($user4);
    }
}
