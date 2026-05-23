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
        Schema::table('footers', function (Blueprint $table) {
            $table->string('phone_number')->nullable()->after('link');
            $table->string('whatsapp_number')->nullable()->after('phone_number');
            $table->text('address')->nullable()->after('whatsapp_number');
            $table->string('facebook_link')->nullable()->after('address');
            $table->string('youtube_link')->nullable()->after('facebook_link');
            $table->string('whatsapp_link')->nullable()->after('youtube_link');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('footers', function (Blueprint $table) {
            $table->dropColumn(['phone_number', 'whatsapp_number', 'address', 'facebook_link', 'youtube_link', 'whatsapp_link']);
        });
    }
};
