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
        Schema::table('dishes', function (Blueprint $table) {
            $table->integer('metric_value')
                ->nullable()
                ->comment('Вес/объём блюда')
                ->change();

            $table->foreignId('metric_id')
                ->nullable()
                ->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dishes', function (Blueprint $table) {
            $table->integer('metric_value')
                ->comment('Вес/объём блюда')
                ->change();

            $table->foreignId('metric_id')
                ->change();
        });
    }
};
