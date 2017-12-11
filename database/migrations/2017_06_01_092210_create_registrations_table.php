<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->string('registration_number')->unique();
            $table->primary('registration_number');
            $table->integer('first_faculty_id')->nullable();
            $table->integer('second_faculty_id')->nullable();
            $table->integer('first_department_id')->nullable();
            $table->integer('second_department_id')->nullable();
            $table->string('registration_status')->nullable();
            $table->string('payment_status')->default('NOT PAID');
            $table->integer('admin_officer_review_status')->default(0);
            $table->text('admin_officer_review')->nullable();
            $table->integer('registrar_review')->nullable();
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
        Schema::dropIfExists('registrations');
    }
}
