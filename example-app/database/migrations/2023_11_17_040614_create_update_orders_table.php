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
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger("id_tinhtrangdonhang"); // Add a column name here

            $table->foreign('id_tinhtrangdonhang')
                  ->references('id')
                  ->on('status_orders')
                  ->onDelete('cascade'); // Tuỳ chọn: cascade để tự động xóa liên quan khi xóa dữ liệu từ bảng loại sản phẩm.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('update_orders');
    }
};
