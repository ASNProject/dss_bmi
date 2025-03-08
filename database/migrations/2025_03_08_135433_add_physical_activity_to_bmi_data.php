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
        Schema::table('bmi_data', function (Blueprint $table) {
            $table->text('physical_activity')->nullable(); // Menambahkan kolom untuk aktivitas fisik
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bmi_data', function (Blueprint $table) {
            $table->dropColumn('physical_activity'); // Menghapus kolom jika migrasi dibatalkan
        });
    }
};
