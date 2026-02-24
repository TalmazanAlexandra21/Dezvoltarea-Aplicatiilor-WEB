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
    Schema::create('subscriptions', function (Blueprint $table) {
        $table->id(); 
        $table->string('nume_abonament'); // Exemplu: "VIP", "Basic"
        $table->decimal('pret', 8, 2);    // Exemplu: 45.50
        $table->integer('durata_zile');   // Exemplu: 30
        $table->string('categorie');      // Exemplu: "Fitness" sau "Cardio"
        $table->timestamps(); 
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
