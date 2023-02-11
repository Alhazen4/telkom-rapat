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
            $table->string('order_number');
            $table->string('name_requestor');
            $table->date('date');
            $table->time('time');
            $table->string('unit');
            $table->string('telephone');
            $table->integer('total_participants');
            $table->foreignIdFor(Room::class);
            $table->foreignIdFor(Status::class);
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
