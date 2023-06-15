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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200)->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('category', 100)->nullable(false);
            $table->string('type', 100)->nullable(false);
            $table->string('weight', 100)->nullable(false);
            $table->string('cost', 20)->nullable(false);


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
        Schema::dropIfExists('items');
    }
};
