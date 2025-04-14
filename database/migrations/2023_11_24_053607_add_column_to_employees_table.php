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
            $table->text('secondhighestlevel')->nullable()->after('secondaryschool');
            $table->text('vocationalhighestlevel')->nullable()->after('secondhighestlevel');
            $table->text('elemhighestlevel')->nullable()->after('vocationalhighestlevel');
            $table->text('elementarybasiceducation')->nullable()->after('elemhighestlevel');
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
