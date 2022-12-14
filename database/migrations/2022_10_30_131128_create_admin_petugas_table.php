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
        Schema::create('admin_petugas', function (Blueprint $table) {
            $table->id('id_admin_petugas');
            $table->foreignId('id_user')->nullable()->constrained('users', 'id')
                ->onUpdate('no action')
                ->onDelete('no action');
            $table->string('nama')->nullable();
            $table->string('email')->unique();
            $table->string('no_hp')->nullable();
            $table->string('foto')->nullable();
            $table->string('role')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_petugas');
    }
};
