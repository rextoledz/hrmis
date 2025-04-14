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
        Schema::create('leaveapplications', function (Blueprint $table) {
            $table->id();
            $table->string('office');
            $table->string('employeename');
            $table->date('dateoffiling');
            $table->string('position');
            $table->string('salary');
            $table->string('vacationleave')->nullable();
            $table->string('mandatoryleave')->nullable();
            $table->string('sickleave')->nullable();
            $table->string('maternityleave')->nullable();
            $table->string('paternityleave')->nullable();
            $table->string('specialprivilegeleave')->nullable();
            $table->string('soloparentleave')->nullable();
            $table->string('studyleave')->nullable();
            $table->string('vawcleave')->nullable();
            $table->string('rehabilitation')->nullable();
            $table->string('specialleavebenefits')->nullable();
            $table->string('specialemergency')->nullable();
            $table->string('adoptionleave')->nullable();
            $table->string('other')->nullable();
            $table->string('reason')->nullable();
            $table->string('philippine')->nullable();
            $table->string('phil')->nullable();
            $table->string('abroad')->nullable();
            $table->string('outofcountry')->nullable();
            $table->string('inhospital')->nullable();
            $table->string('admit')->nullable();
            $table->string('outpatient')->nullable();
            $table->string('undermedication')->nullable();
            $table->string('leavebenefits')->nullable();
            $table->string('benefits')->nullable();
            $table->string('completion')->nullable();
            $table->string('boardexam')->nullable();
            $table->string('otherpurpose')->nullable();
            $table->string('monetization')->nullable();
            $table->string('terminalleave')->nullable();
            $table->string('inclusivedates')->nullable();
            $table->string('notrequested')->nullable();
            $table->string('requested')->nullable();
            $table->enum('status', ['Pending', 'Approved', 'Rejected'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaveapplications');
    }
};
