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
        Schema::create('portfolio_details', function (Blueprint $table) {
            $table->id();
            $table->string('img', 40);
            $table->string('category');
            $table->string('client');
            $table->string('date', 20);
            $table->string('url');
            $table->string('title', 60);
            $table->longText('description');
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
        Schema::dropIfExists('portfolio_details');
    }
};
