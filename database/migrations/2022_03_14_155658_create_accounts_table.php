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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
			$table->string('name', 20);
			$table->integer('balance');
			$table->foreignId('currency_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
			$table->foreignId('type_id')->constrained('account_types')->onDelete('cascade')->onUpdate('cascade');
			$table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('accounts');
    }
};
