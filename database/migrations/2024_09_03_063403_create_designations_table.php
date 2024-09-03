<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('designations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    
        // Insert seed data
        DB::table('designations')->insert([
            ['name' => 'Manager'],
            ['name' => 'Developer'],
            ['name' => 'Sales Executive'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designations');
    }
};
