<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('description');
            $table->enum('category',[
                '1','2','3'
            ]);
            $table->unsignedBiginteger('supplier_id')->index();
            $table->unsignedBiginteger('storage_id')->index();
            $table->double('total_stocks');
            
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
        Schema::dropIfExists('assets');
    }
}
