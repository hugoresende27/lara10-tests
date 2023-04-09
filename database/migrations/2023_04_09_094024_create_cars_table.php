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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('manufacturer');

//            $table->foreignId('employee_id')->constrained();
//            $table->foreignId('customer_id')->constrained();

            $table->morphs('carable');

//            $table->unsignedBigInteger('carable_id');
//            $table->string('carable_type'); //(Ap\Models\JoeRental\Customer

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
