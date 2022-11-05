<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_libraries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('district_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('block_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('village_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('habitation_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_number')->nullable();
            $table->boolean('library_available')->default(0);
            $table->string('library_name')->nullable();
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
        Schema::dropIfExists('member_libraries');
    }
};
