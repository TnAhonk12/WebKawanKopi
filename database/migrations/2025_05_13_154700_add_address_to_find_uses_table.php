<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('find_uses', function (Blueprint $table) {
            $table->string('address')->after('nama_tempat')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('find_uses', function (Blueprint $table) {
            $table->dropColumn('address');
        });
    }
};
