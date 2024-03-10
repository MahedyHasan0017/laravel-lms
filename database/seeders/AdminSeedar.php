<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash ; 

class AdminSeedar extends Seeder
{
   
    public function run(): void
    {
        $obj = new Admin(); 

        $obj->name="Admin" ;
        $obj->email="admin@gmail.com" ;
        $obj->password= Hash::make('1234') ; 
        $obj->save() ; 
    }
}
