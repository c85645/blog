<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // 對哪個資料表做資料保留或是塞資料
        // 若db已有資料的話
        // 則可使用sequel pro對table進行匯出（結構、內容、刪除）
        // 等重新migrate之後再將資料匯回去
        $this -> call(TasksSeeder::class);
    }
}
