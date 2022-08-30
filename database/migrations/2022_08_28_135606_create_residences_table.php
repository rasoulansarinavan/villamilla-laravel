<?php

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
        Schema::create('residences', function (Blueprint $table) {
            $table->id();
            $table->string('name_fa')->unique();
            $table->string('name_en')->unique();
            $table->string('slug_fa');
            $table->string('slug_en');
            $table->string('wc_fa');
            $table->string('wc_en');
            $table->string('bath');
            $table->string('single_bed');
            $table->string('double_bed');
            $table->integer('capacity');
            $table->integer('price');
            $table->integer('discount')->nullable();
            $table->text('long_desc_fa');
            $table->text('short_desc_en');
            $table->text('long_desc_en');
            $table->text('short_desc_fa');
            $table->string('thumbnail');
            $table->integer('special_offer')->nullable();
            $table->integer('status')->default(0);
            $table->foreignId('environment_id')->constrained();
            $table->foreignId('category_id')->constrained();
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
        Schema::dropIfExists('residences');
    }
};
