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
        Schema::table('students', function (Blueprint $table) {
            // This adds the column to your database so saving works!
            $table->string('course')->after('email')->nullable();
        });
    }
    
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('course');
        });
    }
};
