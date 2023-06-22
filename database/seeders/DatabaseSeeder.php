<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Sales;
use App\Models\Status;
use App\Models\CallTextStatus;
use App\Models\Courier;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@sdt.com',
            'password' => Hash::make('admin!sdt09')
        ]);

        Status::factory()->create([
            'status_name' => 'Delivered'
        ]);
        Status::factory()->create([
            'status_name' => 'On Delivery'
        ]);
        Status::factory()->create([
            'status_name' => 'In-Transit'
        ]);
        Status::factory()->create([
            'status_name' => 'Incomplete'
        ]);
        Status::factory()->create([
            'status_name' => 'Picked-Up'
        ]);
        Status::factory()->create([
            'status_name' => 'Problematic',
        ]);
        Status::factory()->create([
            'status_name' => 'Reserved',
        ]);
        Status::factory()->create([
            'status_name' => 'Returned',
        ]);
        Status::factory()->create([
            'status_name' => 'ODZ'
        ]);
        Status::factory()->create([
            'status_name' => 'RTS'
        ]);
        Status::factory()->create([
            'status_name' => 'Detained'
        ]);


        CallTextStatus::factory()->create([
            'cts_name' => 'Called'
        ]);
        CallTextStatus::factory()->create([
            'cts_name' => 'To Call'
        ]);
        CallTextStatus::factory()->create([
            'cts_name' => 'Texted'
        ]);
        CallTextStatus::factory()->create([
            'cts_name' => 'To Text'
        ]);


        Courier::factory()->create([
            'courier_name' => 'Flash Express'
        ]);
        Courier::factory()->create([
            'courier_name' => 'LBC Express'
        ]);
        Courier::factory()->create([
            'courier_name' => 'J&T Express'
        ]);
    }
}
