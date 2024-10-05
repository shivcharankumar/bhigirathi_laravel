<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        schema::create('customers',function(blueprint $table){
            $table->id('customers_id');  //customers_id
            $table->string('name',40);
            $table->string('email',40);
            $table->enum('gender',['F','M','O'])->nullable();
            $table->string('address',60);
            $table->date('dob');
            $table->string('password');
            $table->boolean('status')->default(1);
            $table->integer('points')->default(0);
            $table->timestamps();    //created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
