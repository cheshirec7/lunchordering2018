<?php

use Illuminate\Database\Seeder;
use App\Models\MenuItem;

class MenuItemSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $menuitem = MenuItem::create([
            'provider_id'   => 4, //panera
            'item_name'     => 'Greek Yogurt with apple',
            'description'     => 'Greek Yogurt, Granola, and Mixed Berry Parfait with apple',
            'price'         => 500,
        ]);
    }
}
