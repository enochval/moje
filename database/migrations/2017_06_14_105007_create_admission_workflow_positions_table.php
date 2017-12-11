<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionWorkflowPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_workflow_positions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('position');
            $table->string('description');
            $table->string('applicant_description');
            $table->string('action_back');
            $table->string('action_next');
            $table->string('action_cancel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admission_workflow_positions');
    }
}
