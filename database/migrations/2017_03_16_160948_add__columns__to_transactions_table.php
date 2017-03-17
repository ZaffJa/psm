<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->unsignedInteger('owner_id')->after('user_id');
            $table->smallInteger('duration')->after('car_id')->nullable();
            $table->smallInteger('pickup_time')->after('duration');
            $table->boolean('status')->after('price')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropColumn(['owner_id','duration','pickup_time','status']);
        });
    }
}
