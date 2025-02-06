<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveCardNumberAndExpiredAndCvvAndIsPaidInCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->dropColumn(['card_number', 'expired', 'cvv', 'is_paid']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->string('card_number')->nullable();
            $table->string('expired')->nullable();
            $table->string('cvv')->nullable();
            $table->boolean('is_paid')->default(false);
        });
    }
};
