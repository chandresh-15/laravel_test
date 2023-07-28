<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'name' =>'Chandresh',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.'
            ],

            [
                'name' =>'Jatin',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.'
            ],


            [
                'name' =>'Raj',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.'
            ],


            [
                'name' =>'Jay',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.'
            ]
        ];
        foreach($datas as $data)
        {
            Product::create($data);
        }
    }
}
