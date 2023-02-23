<?php

use App\Models\Room;
use App\Models\Status;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestor_rooms', function (Blueprint $table) {
            $table->id('id_requests');
            $table->unsignedBigInteger('id_rooms');
            $table->foreign('id_rooms')->references('id')->on('rooms');
            $table->string('booking_code');
            $table->string('name_requestor');
            $table->date('date');
            $table->time('time_start');
            $table->time('time_end');
            $table->string('unit');
            $table->string('telephone');
            $table->integer('total_participants');
            $table->string('status');
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
        Schema::dropIfExists('requestor_rooms');
    }
};
