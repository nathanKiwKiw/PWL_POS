<?php

use App\Models\m_level;
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
        // Schema::create('user', function (Blueprint $table) {
        Schema::create('m_user', function (Blueprint $table) {
            $table->id('user_id');
            $table->unsignedBigInteger('level_id')->index(); //indexing for Foreing Key
            $table->string('username', 20)->unique();
            $table->string('nama', 100);
            $table->string('password');
            $table->timestamps();

            //Mendefinisikan Foreign Key pada kolom level_id pada tabel m_level
            $table->foreign('level_id')->references('level_id')->on('m_level');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('m_user');
        Schema::dropIfExists('m_user');
    }
};
//Running this migration script will create the 'm_user' table with the specified schema in the database and create a foreign key constraint between the 'level_id' column in the 'm_user' table and the 'level_id' column in the 'm_level' table.