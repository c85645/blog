<?php

use Illuminate\Database\Seeder;
use App\Task;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'name' => '洗衣服',
            'description' => '要洗乾淨一點'
        ]);
    }
}
