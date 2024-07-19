<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->decimal('amount', 8, 2);
            $table->string('currency', 3);
            $table->string('status');
            $table->string('transaction_id');
            $table->string('payment_method');
            $table->timestamps();
            });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
