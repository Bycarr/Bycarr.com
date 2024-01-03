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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('title');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->json('contact')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->integer('display_order')->default(0);
            $table->boolean('status')->default(1)->comment('0: Inactive; 1: Active');
            $table->foreignId('city_id')->nullable()->constrained('cities')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agents');
    }
};
