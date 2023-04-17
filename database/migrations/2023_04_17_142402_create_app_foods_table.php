<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('app_foods', function (Blueprint $table) {
            $table->id();
            $table->string('name_food', 30) -> unique();
            $table->string('name_drink', 30) -> unique();
            $table->text('description', 1000);
            $table->string('address', 200);
            $table->string('phone_number', 40);
            $table->string('photo_food') -> nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_foods');
    }
};
