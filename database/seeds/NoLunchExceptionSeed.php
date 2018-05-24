<?php

use Illuminate\Database\Seeder;
use App\Models\NoLunchException;

class NoLunchExceptionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $nle = NoLunchException::create([
            'reason'            => 'Catalina Trip',
            'description'       => 'Lunch Provided',
            'grade_id'          => 9,
            'exception_date'    => '2017-09-18'
        ]);
    }
}
