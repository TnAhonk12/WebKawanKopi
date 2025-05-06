<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('find_uses', function (Blueprint $table) {
            $table->string('grab')->nullable()->after('maps');
            $table->string('gofood')->nullable()->after('grab');
            $table->string('shopee')->nullable()->after('gofood');
        });
    }

    public function down(): void
    {
        Schema::table('find_uses', function (Blueprint $table) {
            $table->dropColumn(['grab', 'gofood', 'shopee']);
        });
    }
};
