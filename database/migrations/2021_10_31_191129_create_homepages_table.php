<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('parent_id')->default(0);
            $table->string('page')->nullable();
            $table->string('title');
            $table->longText('content')->nullable();
            $table->string('alt')->nullable();
            $table->string('image')->nullable();
            $table->string('bg_color')->nullable();
            $table->text('bg_image')->nullable();
            $table->string('bg_alt')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('sub_content')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homepages');
    }
}
