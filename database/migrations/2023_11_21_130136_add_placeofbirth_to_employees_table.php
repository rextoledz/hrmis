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
            $table->string('placeofbirth')->nullable()->after('dateofbirth');
            $table->string('gsis')->nullable()->after('corporateemail');
            $table->string('pagibig')->nullable()->after('gsis');
            $table->string('philhealth')->nullable()->after('pagibig');
            $table->string('sss')->nullable()->after('philhealth');
            $table->string('tin')->nullable()->after('sss');
            $table->integer('biometric')->unique()->after('personnel');
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
