<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_students', function (Blueprint $table) {
            $table->id();
            $table->string('std_name');
            $table->string('std_reg_no');
            $table->int('std_rol_no');
            $table->int('std_class');
            $table->int('std_section');
            $table->int('std_by_cnic');
            $table->int('std_gen');
            // $table->string('std_image');
            // $table->string('std_dob');
            // $table->int('std_rligion');
            // $table->string('std_father_name');
            // $table->string('std_father_cnic');
            // $table->string('std_father_m_no');
            // $table->string('std_mother_mother');
            // $table->int('std_gardian');
            // $table->string('std_gardian_relation');
            // $table->string('std_gardian_name');
            // $table->string('std_gardian_cnic');
            // $table->int('std_gardian_m_no');
            // $table->int('std_province');
            // $table->string('std_city');
            // $table->string('std_postal_address');
            // $table->string('std_permanent_address');
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
        Schema::dropIfExists('add_students');
    }
}
