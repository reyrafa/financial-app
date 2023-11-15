<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("loan_status")->insert([
            ["status_name"=> "current" , "description" => "loan is on good standing"],
            ['status_name' => 'delinquent' , 'description' => 'payment that are overdue'],
            ['status_name' => 'default' , 'description'=> 'borrower failed to pay'],
            ['status_name' => 'restructured', 'description' => 'term loan have been modified'],
            ['status_name' => 'paid off', 'description' => 'paid entire loan']
        ]);
    }
}
