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
            $table->string('course')->after('corporateemail');
            $table->string('graduate')->after('course')->nullable();
            $table->string('csc')->after('graduate')->nullable();
            $table->date('dateofissuance')->after('csc')->nullable();
            $table->date('dateofvalidity')->after('dateofissuance')->nullable();
            $table->string('personnel')->after('dateofvalidity');
            $table->string('status')->after('personnel');
            $table->string('position')->after('status');
            $table->date('dateofjoining')->after('position');
            $table->date('dateofleaving')->after('dateofjoining')->nullable();
            $table->date('dateofretirement')->after('dateofleaving');
            $table->integer('salary')->after('dateofretirement');
            $table->integer('step')->after('salary');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            //
        });
    }
};
