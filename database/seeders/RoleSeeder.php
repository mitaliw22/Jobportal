<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $freelancer = new Role;
        $freelancer->name = 'Freelancer';
        $freelancer->description = 'Freelancers looking for projects';
        $freelancer->save();

        $client = new Role;
        $client->name = 'Client';
        $client->description = 'Clients posting jobs for freelancers';
        $client->save();
    }
}
