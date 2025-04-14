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
        Schema::table('employees', function (Blueprint $table) {
            $table->string('corporateemail')->nullable()->change();
            $table->string('csc')->nullable()->change();
            $table->string('dateofissuance')->nullable()->change();
            $table->string('dateofvalidity')->nullable()->change();
            $table->string('dateofleaving')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
