<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('name');
            $table->string('symbol');
            $table->string('chain');
            $table->string('address');
            $table->integer('market_cap')->default(0);
            $table->decimal('price',10,2)->default(0.00);
            $table->dateTime('launch_date')->nullable();
            $table->longText('description');
            $table->string('website')->nullable();
            $table->string('audit_url')->nullable();
            $table->string('telegram');
            $table->string('twitter')->nullable();
            $table->string('discord')->nullable();
            $table->string('reddit')->nullable();
            $table->string('logo_url');
            $table->string('contact_email')->nullable();
            $table->string('contact_telegram')->nullable();
            $table->integer('votes')->default(0);
            $table->integer('promoted')->default(0);
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
        Schema::dropIfExists('coins');
    }
}
