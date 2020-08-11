<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipt_uploads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('provide_help_id');
            $table->unsignedBigInteger('reporter_user_id')->nullable();
            $table->string('image');
            $table->text('reason')->nullable();
            $table->boolean('is_fake')->default(false);
            $table->string('token');
            $table->timestamps();

            $table->foreign('reporter_user_id')->references('id')->on('users');
            $table->foreign('provide_help_id')->references('id')->on('provide_helps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receipt_uploads');
    }
}
