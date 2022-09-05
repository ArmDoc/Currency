<?php

namespace Database\Seeders;

use App\Models\CurrencyHistorys;
use App\Models\CurrencyHystorys;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencyHystorysSeader extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		CurrencyHystorys::factory(5)->create();
	}
}
