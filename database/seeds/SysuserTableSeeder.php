<?php

use App\Sysuser;
use Illuminate\Database\Seeder;

class SysuserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sysuser = factory(Sysuser::class, 10)->create();
    }
}
