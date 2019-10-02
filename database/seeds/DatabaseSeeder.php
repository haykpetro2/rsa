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
        DB::table('order_types')->insert(['name' => 'ОСАГО']);
        DB::table('order_types')->insert(['name' => 'КАСКО']);
        DB::table('order_types')->insert(['name' => 'ТО']);
        $this->call(TravelSeeder::class);

        DB::table('order_statuses')->insert(['name' => 'Новый']);
        DB::table('order_statuses')->insert(['name' => 'Обрабатывается']);
        DB::table('order_statuses')->insert(['name' => 'Обработан']);
        DB::table('order_statuses')->insert(['name' => 'Отклонен']);
    }
}
