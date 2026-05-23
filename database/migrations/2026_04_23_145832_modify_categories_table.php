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
        Schema::table('categories', function (Blueprint $table) {
            if (Schema::hasColumn('categories', 'image')) {
                $table->dropColumn('image');
            }
            if (!Schema::hasColumn('categories', 'count')) {
                $table->integer('count')->default(0)->after('parent_id');
            }
            if (!Schema::hasColumn('categories', 'front_view')) {
                $table->tinyInteger('front_view')->default(0)->after('status');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('image')->default('public/uploads/category/default.png')->after('parent_id');
            $table->dropColumn('count');
            $table->dropColumn('front_view');
        });
    }
};
