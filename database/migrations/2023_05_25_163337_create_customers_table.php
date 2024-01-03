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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('email')->nullable();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->enum('login_by', array('MANUAL', 'FACEBOOK', 'GOOGLE', 'APPLE'));
            $table->string('social_unique_id')->nullable();
            $table->string('referral_code')->nullable();
            $table->foreignId('referred_by')->nullable()->constrained('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->rememberToken();
            $table->boolean('status')->default(1)->comment('0: Inactive; 1: Active');
            $table->timestamps(6);
            $table->softDeletes('deleted_at', 6);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
