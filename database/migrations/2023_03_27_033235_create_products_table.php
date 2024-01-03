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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->uuid('code');
            $table->foreignId('product_category_id')->constrained('product_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('product_brand_id')->constrained('product_brands')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('product_model_id')->nullable()->constrained('product_models')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('agent_id')->nullable()->constrained('agents')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('city_id')->nullable()->constrained('cities')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->text('excerpt')->nullable();
            $table->decimal('price', 8, 2)->default(0);
            $table->decimal('discount', 2, 2)->default(0);
            $table->decimal('discount_amount', 8, 2)->default(0);
            $table->integer('display_order')->default(0);
            $table->integer('quantity')->default(1);
            $table->enum('stock_status', ['In Stock', 'Booked', 'Out of Stock', 'Sold'])->default('In Stock');
            $table->boolean('status')->default(1)->comment('0: Inactive; 1: Active');
            $table->boolean('is_verified')->default(0)->comment('0: unverified; 1: verified');
            $table->boolean('delivery')->default(0);
            $table->boolean('negotiable')->default(0);
            $table->dateTime('verified_date')->nullable();
            $table->foreignId('verified_by')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('updated_by')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('products');
    }
};
