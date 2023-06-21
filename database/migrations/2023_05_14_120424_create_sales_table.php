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
        Schema::create('sales', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->date('sales_date');
            $table->string('page_name');
            $table->string('csr_name');
            $table->string('customer_name');
            $table->integer('number');
            $table->longText('address_landmark');
            $table->string('main_item');
            $table->string('sku_1')->nullable();
            $table->string('sku_2')->nullable();
            $table->string('sku_3')->nullable();
            $table->string('sku_4')->nullable();
            $table->string('upseller');
            $table->string('upsell_item');
            $table->decimal('price');
            $table->decimal('upsell_price');
            $table->decimal('final_price');
            $table->longText('notes')->nullable();
            $table->string('cts_id');
            // $table->string('shipper');
            $table->string('courier');
            $table->string('status');
            $table->string('tracking_number');
            // $table->string('pos');
            $table->string('rts_tracking_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
