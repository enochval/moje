<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionWorkflowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_workflows', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('registration_number');
            $table->text('remark');
            $table->string('workflow_action')->nullable();
            $table->string('workflow_status')->nullable();
            $table->integer('created_by');
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
        Schema::dropIfExists('admission_workflows');
    }
}
