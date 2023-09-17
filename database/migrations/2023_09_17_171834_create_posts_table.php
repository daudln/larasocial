<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Visus\Cuid2\Cuid2;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $cuid = new Cuid2();
        Schema::create('posts', function (Blueprint $table) use ($cuid) {
            $table->id();
            $table->uuid("unique_id")->default($cuid);
            $table->timestamps();
            $table->string("title", 255);
            $table->longText("content");
            $table->foreignId("user_id")->constrained("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
