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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('code');
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('city_id')->nullable()->constrained('cities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('agent_id')->nullable()->constrained('agents')->onDelete('cascade')->onUpdate('cascade');
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('payment_status')->default(1);
            $table->string('payment_method')->nullable();
            $table->string('online_trxn_id')->nullable();
            $table->string('full_name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->text('additional_info')->nullable();
            $table->decimal('price', 8, 2)->default(0);
            $table->decimal('discount', 2, 2)->default(0);
            $table->decimal('total_amount', 8, 2)->default(0);
            $table->decimal('paid_amount', 8, 2)->default(0);
            $table->boolean('has_delivery')->default(0);
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
        Schema::dropIfExists('bookings');
    }
};
