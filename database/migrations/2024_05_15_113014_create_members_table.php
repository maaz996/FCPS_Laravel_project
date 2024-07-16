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
        Schema::create('members', function (Blueprint $table) {
            $table->id('id');
            $table->string('student_name', 120);
            $table->string('image');                  // image
            $table->string('student_cnic', 15);
            $table->string('father_name', 120);
            $table->string('father_cnic', 15);
            $table->string('guardian_name', 120);
            $table->string('gender');
            $table->string('D_O_B');
            $table->string('B_Group', 4);
            $table->string('nationality', 60);
            $table->string('religion', 20);
            $table->string('domicile', 60);
            $table->string('mob_number', 14);
            $table->string('w_number', 14);
            $table->string('fg_number', 14);
            $table->string('father_occupation', 30);
            $table->string('father_income', 30);
            $table->text('permanet_address');
            $table->string('postal_address', 10);
            $table->string('program', 150);
            $table->string('show_shift');
            $table->json('show_option');
            $table->string('ssc_institution_name', 200);
            $table->string('ssc_roll_no', 12);
            $table->string('ssc_passing_year', 6);
            $table->string('ssc_marks_obtained', 8);
            $table->string('ssc_div', 5);
            $table->string('institution_name', 200);
            $table->string('roll_no', 12);
            $table->string('passing_year', 6);
            $table->string('marks_obtained', 8);
            $table->string('div', 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
