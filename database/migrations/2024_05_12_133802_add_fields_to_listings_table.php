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
        Schema::table('listings', function (Blueprint $table) {
            $table->unsignedTinyInteger('beds');//0 -255
            $table->unsignedTinyInteger('baths');//0 -255
            $table->unsignedTinyInteger('area');//0 -255

            $table->tinyText('city');//hold up to 255 characters
            $table->tinyText('code');//hold up to 255 characters
            $table->tinyText('street');//hold up to 255 characters
            $table->tinyText('street_nr');//hold up to 255 characters

            $table->unsignedBigInteger('price');//0 - 18446744073709551615
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('listings', function (Blueprint $table) {
        //     $table->dropColumn()
        // });
        Schema::dropColumns('listings', [
            'beds','baths','area','city','code','street','street_nr','price'
        ]);
    }
};
