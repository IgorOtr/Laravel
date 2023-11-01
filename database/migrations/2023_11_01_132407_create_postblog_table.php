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
        Schema::create('postblog', function (Blueprint $table) {
            $table->id();
            $table->string('post_title', 255);
            $table->string('post_content', 255);
            $table->string('post_img', 255);
            $table->string('post_status',2);
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
        Schema::dropIfExists('postblog');
    }
};
