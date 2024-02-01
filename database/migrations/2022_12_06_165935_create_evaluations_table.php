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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('operator_name');
            $table->string('kps_name')->nullable();
            $table->string('kps_reply')->nullable();
            $table->string('pimpinan_name')->nullable();
            $table->string('pimpinan_reply')->nullable();
            $table->string('reviewer_name')->nullable();
            $table->string('reviewer_reply')->nullable();
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
        Schema::dropIfExists('evaluations');
    }
};
