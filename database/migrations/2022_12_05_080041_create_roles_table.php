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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->text("name");
            $table->timestamp('created_at', $precision = 0);
        });

        /* Создать колонку role_id в таблице users если не существует */
        if (!(Schema::hasColumn('users', 'role_id'))) {
            Schema::table('users', function (Blueprint $table) {
                $table->integer('role_id')->after('email');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
