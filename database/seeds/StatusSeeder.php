<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userIds = [1,2,3];
        $facker = app(Faker\Generator::class);
        $statuses = factory(\App\Models\Status::class)->times(100)->make()->each(function ($status) use ($facker, $userIds) {
            $status->user_id = $facker->randomElement($userIds);
        });

        \App\Models\Status::insert($statuses->toArray());
    }
}
