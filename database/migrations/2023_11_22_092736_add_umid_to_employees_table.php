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
            $table->text('umid')->nullable()->after('tin');
            $table->text('spousesurname')->after('umid');
            $table->text('spousefirstname')->after('spousesurname');
            $table->text('spousemiddlename')->nullable()->after('spousefirstname');
            $table->text('occupation')->after('spousemiddlename');
            $table->string('businessname')->nullable()->after('occupation');
            $table->string('businessaddress')->nullable()->after('businessname');
            $table->string('telephone')->nullable()->after('businessaddress');
            $table->text('extension')->nullable()->after('telephone');
            $table->text('fathersurname')->after('extension');
            $table->text('fatherfirstname')->after('fathersurname');
            $table->text('fathermiddlename')->nullable()->after('fatherfirstname');
            $table->string('nameextension')->nullable()->after('fathermiddlename');
            $table->text('maidenname')->after('nameextension');
            $table->string('mothersurname')->after('maidenname');
            $table->string('motherfirstname')->after('mothersurname');
            $table->text('mothermiddlename')->nullable()->after('motherfirstname');
            $table->string('elementaryschool')->after('mothermiddlename');
            $table->string('secondaryschool')->after('elementaryschool');
            $table->text('vocationalschool')->nullable()->after('secondaryschool');
            $table->string('graduatestudies')->nullable()->after('vocationalschool');
            $table->string('secondarybasiceducation')->nullable()->after('graduatestudies');
            $table->string('vocationalbasiceducation')->nullable()->after('secondarybasiceducation');
            $table->string('collegebasiceducation')->nullable()->after('vocationalbasiceducation');
            $table->string('graduatestudiesbasiceducation')->nullable()->after('collegebasiceducation');
            $table->string('highestlevel')->nullable()->after('graduatestudiesbasiceducation');
            $table->string('yeargradelementary')->after('highestlevel');
            $table->string('yeargradsecondary')->after('yeargradelementary');
            $table->string('yeargradvocational')->nullable()->after('yeargradsecondary');
            $table->string('yeargradcollege')->nullable()->after('yeargradvocational');
            $table->string('yeargradstudies')->nullable()->after('yeargradcollege');
            $table->text('rating')->nullable()->after('yeargradstudies');
            $table->text('dateofexamination')->nullable()->after('rating');
            $table->text('placeofexamination')->nullable()->after('dateofexamination');
            $table->integer('licensenumber')->nullable()->after('placeofexamination');
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
