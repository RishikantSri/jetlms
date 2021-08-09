<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('category')->nullable();
            $table->string('author')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 15, 2)->default(0);
            $table->string('course_image')->nullable()->default('/storage/default/course-icon.jpg');
            $table->string('rating')->default(0);
            $table->string('likes')->default(0);
            $table->date('start_date')->nullable();
            $table->tinyInteger('published')->default(0);
            
            $table->softDeletes();
            $table->index(['deleted_at']);
            
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
        Schema::dropIfExists('courses');
    }
}
