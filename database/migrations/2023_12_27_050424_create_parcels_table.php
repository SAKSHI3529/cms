<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->string('senderName',50);
            $table->string('senderAddress',100);
            $table->string('sendercontact',15);
            $table->string('BranchProcessed',100);
            $table->string('receiverName',50);
            $table->string('receiverAddress',100);
            $table->string('receivercontact',15);
            $table->string('PickupBranch',100);
            $table->string('weight',10);
            $table->string('height',10);
            $table->string('length',10);
            $table->string('width',10);
            $table->string('price',10);

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
        Schema::dropIfExists('parcels');
    }
}