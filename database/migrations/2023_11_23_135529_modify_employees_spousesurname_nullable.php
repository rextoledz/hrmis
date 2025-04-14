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
            $table->string('spousesurname')->nullable()->change();
            $table->string('spousefirstname')->nullable()->change();
            $table->string('occupation')->nullable()->change();
            $table->string('fathersurname')->nullable()->change();
            $table->string('fatherfirstname')->nullable()->change();
            $table->string('nameextension')->nullable()->change();
            $table->string('maidenname')->nullable()->change();
            $table->string('mothersurname')->nullable()->change();
            $table->string('motherfirstname')->nullable()->change();
            $table->string('secondaryschool')->nullable()->change();
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
