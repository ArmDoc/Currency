<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('currency_hystorys', function (Blueprint $table) {
			$table->id();
			$table->foreignId('currencys_id')->constrained()
				->cascadeOnUpdate()
				->cascadeOnDelete();
			$table->number_format('value');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('currency_hystorys');
	}
};
