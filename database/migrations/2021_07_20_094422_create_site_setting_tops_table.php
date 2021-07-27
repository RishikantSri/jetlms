<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingTopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_setting_tops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sitetitle')->nullable();
            $table->string('heading')->nullable();
            $table->longText('sub_heading')->nullable();
            $table->string('button_text')->nullable();
            $table->longText('background_image')->nullable();
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('site_setting_tops');
    }
}
