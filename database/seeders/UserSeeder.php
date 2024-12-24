<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name'    => 'Admin',
            'username'    => 'admin',
            'email'    => 'admin@gmail.com',
            'password'    => bcrypt('admin'),
            'role'    => 'Admin',
            'created_at' => new \DateTime,
            'updated_at' => null,
        ]);

        \App\Models\User::create([
            'name'    => 'Widyaiswara',
            'username'    => 'widyaiswara',
            'email'    => 'widyaiswara@gmail.com',
            'password'    => bcrypt('widyaiswara'),
            'role'    => 'Widyaiswara',
            'created_at' => new \DateTime,
            'updated_at' => null,
        ]);

        \App\Models\User::create([
            'name'    => 'Agus Mulyana',
            'username'    => 'agusmulyana',
            'email'    => 'agus@gmail.com',
            'password'    => bcrypt('12345'),
            'role'    => 'Widyaiswara',
            'created_at' => new \DateTime,
            'updated_at' => null,
        ]);

        \App\Models\User::create([
            'name'    => 'Ahmad Helmi',
            'username'    => 'ahmadhelmi',
            'email'    => 'ahmadhelmi@gmail.com',
            'password'    => bcrypt('12345'),
            'role'    => 'Widyaiswara',
            'created_at' => new \DateTime,
            'updated_at' => null,
        ]);

        \App\Models\User::create([
            'name'    => 'Aries Setyarto',
            'username'    => 'ariessetyarto',
            'email'    => 'aries@gmail.com',
            'password'    => bcrypt('12345'),
            'role'    => 'Widyaiswara',
            'created_at' => new \DateTime,
            'updated_at' => null,
        ]);

        \App\Models\User::create([
            'name'    => 'Dian Anggarini',
            'username'    => 'diananggarini',
            'email'    => 'dian@gmail.com',
            'password'    => bcrypt('12345'),
            'role'    => 'Widyaiswara',
            'created_at' => new \DateTime,
            'updated_at' => null,
        ]);

        \App\Models\User::create([
            'name'    => 'Erick Hutrindo',
            'username'    => 'erickhutrindo',
            'email'    => 'erick@gmail.com',
            'password'    => bcrypt('12345'),
            'role'    => 'Widyaiswara',
            'created_at' => new \DateTime,
            'updated_at' => null,
        ]);

        \App\Models\User::create([
            'name'    => 'Fahmi Aulia Rakhman',
            'username'    => 'fahmiaulia',
            'email'    => 'fahmi@gmail.com',
            'password'    => bcrypt('12345'),
            'role'    => 'Widyaiswara',
            'created_at' => new \DateTime,
            'updated_at' => null,
        ]);

        \App\Models\User::create([
            'name'    => 'Ganjar Hermadi',
            'username'    => 'ganjarhermadi',
            'email'    => 'ganjar@gmail.com',
            'password'    => bcrypt('12345'),
            'role'    => 'Widyaiswara',
            'created_at' => new \DateTime,
            'updated_at' => null,
        ]);

        \App\Models\User::create([
            'name'    => 'Hendris Agung Prasojo',
            'username'    => 'hendrisagung',
            'email'    => 'hendris@gmail.com',
            'password'    => bcrypt('12345'),
            'role'    => 'Widyaiswara',
            'created_at' => new \DateTime,
            'updated_at' => null,
        ]);

        \App\Models\User::create([
            'name'    => 'Irfan Choiruddin',
            'username'    => 'irfanchoiruddin',
            'email'    => 'irfan@gmail.com',
            'password'    => bcrypt('12345'),
            'role'    => 'Widyaiswara',
            'created_at' => new \DateTime,
            'updated_at' => null,
        ]);

        \App\Models\User::create([
            'name'    => 'Makmun Abdullah',
            'username'    => 'makmunabdullah',
            'email'    => 'makmun@gmail.com',
            'password'    => bcrypt('12345'),
            'role'    => 'Widyaiswara',
            'created_at' => new \DateTime,
            'updated_at' => null,
        ]);

        \App\Models\User::create([
            'name'    => 'Pujoko Rapiyadi',
            'username'    => 'pujokorapiyadi',
            'email'    => 'pujoko@gmail.com',
            'password'    => bcrypt('12345'),
            'role'    => 'Widyaiswara',
            'created_at' => new \DateTime,
            'updated_at' => null,
        ]);

        \App\Models\User::create([
            'name'    => 'Rohmatulloh',
            'username'    => 'rohmatulloh',
            'email'    => 'rohmatulloh@gmail.com',
            'password'    => bcrypt('12345'),
            'role'    => 'Widyaiswara',
            'created_at' => new \DateTime,
            'updated_at' => null,
        ]);

        \App\Models\User::create([
            'name'    => 'Roni Rahmat Nugraha',
            'username'    => 'ronirahmat',
            'email'    => 'roni@gmail.com',
            'password'    => bcrypt('12345'),
            'role'    => 'Widyaiswara',
            'created_at' => new \DateTime,
            'updated_at' => null,
        ]);

        \App\Models\User::create([
            'name'    => 'Tim Tim Tauhidin Pambudhi Supartawijaya',
            'username'    => 'timtimtauhidin',
            'email'    => 'timtim@gmail.com',
            'password'    => bcrypt('12345'),
            'role'    => 'Widyaiswara',
            'created_at' => new \DateTime,
            'updated_at' => null,
        ]);

        \App\Models\User::create([
            'name'    => 'Zulkifli',
            'username'    => 'zulkifli',
            'email'    => 'zulkifli@gmail.com',
            'password'    => bcrypt('12345'),
            'role'    => 'Widyaiswara',
            'created_at' => new \DateTime,
            'updated_at' => null,
        ]);
    }
}
