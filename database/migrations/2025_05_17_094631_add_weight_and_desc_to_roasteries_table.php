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
    Schema::table('roasteries', function (Blueprint $table) {
        $table->string('link_shopee')->after('link');
        $table->string('berat')->after('link_shopee');
        $table->text('desc')->after('berat');
    });
    }

    public function down(): void
    {
    Schema::table('roasteries', function (Blueprint $table) {
        $table->dropColumn('link_shopee');
        $table->dropColumn('weight');
        $table->dropColumn('desc');
    });
    }
};