<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = collect(json_decode(Storage::get('datas/currencies.json'), true));
		$currencies->each(function($item, $key) {
			DB::table('currencies')->insert([
				'name' => $item['name'],
				'symbol' => $item['symbol'],
				'code' => $item['code'],
				'name_plurals' => $item['name_plural']
			]);
		});
    }
}
