<?php
namespace Database\Seeders;

use App\Models\categories;
use App\Models\District;
use App\Models\Division;
use App\Models\person;
use App\Models\Upazila;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        person::factory(30)->create();

        $user = new user();
        $user->name = 'rasel';
        $user->email='rasel@gmail.com';
        $user->email_verified_at=now();
        $user->password=Hash::make('123');
        $user->remember_token=Str::random(10);
        $user->save();

        //Division

        foreach (tika_bd_divisons() as $division){
            $divisionModel = new Division();
            $divisionModel->name = $division['name'];
            $divisionModel->save();
        }


        //District

        foreach (tika_bd_districts() as $district){
            $districtModel = new District();
            $districtModel->name = $district['name'];
            $districtModel->division_id = $district['division_id'];
            $districtModel->save();
        }




        foreach(tika_bd_upazila() as $upazila){
            $upazilaModel = new Upazila();
            $upazilaModel->name = $upazila['name'];
            $upazilaModel->district_id = $upazila['district_id'];
            $upazilaModel->save();
        }

        //Categories
        foreach(categories() as $category){
            $categories = new categories();
            $categories->name = $category['name'];
            $categories->min_age = $category['min_age'];
            $categories->save();
        }
    }
}
