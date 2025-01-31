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
        Schema::table('booking_training_mapping', function (Blueprint $table) {
            $table->enum('status', ['pending', 'completed', 'rejected'])
                ->default('pending')
                ->after('training_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_training_mapping', function (Blueprint $table) {
            //
        });
    }
};
