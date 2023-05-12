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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('numero');
            $table->date('date_facture');
            $table->double('montantht');
            $table->double('tva');
            $table->double('montantttc');
            $table->double('reduction');
            $table->double('adresse');
            $table->foreignId('customer_id');
            $table->foreignId('user_id');
            $table->foreignId('soin_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facture');
    }
};
