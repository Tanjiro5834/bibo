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
        Schema::table('users', function (Blueprint $table) {
            $table->string('user_uuid')->nullable()->after('id');
            $table->string('username')->nullable()->after('user_uuid');
            $table->string('age')->nullable()->after('email');
            $table->string('first_name')->nullable()->after('age');
            $table->string('last_name')->nullable()->after('first_name');
            $table->string('gender')->nullable()->after('last_name');
            $table->boolean('is_admin')->default(false)->after('gender');
            $table->boolean('is_active')->default(false)->after('is_admin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('user_uuid');
            $table->dropColumn('username');
            $table->dropColumn('age');
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('gender');
            $table->dropColumn('is_admin');
        });
    }
};
