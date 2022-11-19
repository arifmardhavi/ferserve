<?php

use App\Models\Delivery;
use App\Models\Fruit;
use App\Models\Take;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('address');
            $table->string('postal_code', 5);
            $table->string('phone');
            $table->integer('weight');
            $table->foreignIdFor(Fruit::class)->constrained()->cascadeOnUpdate();
            $table->string('origin');
            $table->text('note')->nullable();
            $table->foreignIdFor(Delivery::class)->constrained()->cascadeOnUpdate();
            $table->foreignIdFor(Take::class)->constrained()->cascadeOnUpdate();
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
        Schema::dropIfExists('orders');
    }
};
