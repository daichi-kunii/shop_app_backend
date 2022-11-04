<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillInfosTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_infos_tables', function (Blueprint $table) {
            $table->id();
            $table->string("brand_name");
            $table->string("brand_logo")->defualt(null);
            $table->integer("due")->default(0);
            $table->string("due_info")->defualt(null);
            $table->integer("brand_id")->defualt(0);
            $table->date("due_date");
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
        Schema::dropIfExists('bill_infos_tables');
    }
}
