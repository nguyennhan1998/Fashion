<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string("slug")->unique()->after("product_name")->nullable();
            $table->string("product_size")->after("product_desc")->nullable();
            $table->string("product_color")->after("product_desc")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(["slug"]);
            $table->dropColumn(["product_size"]);
            $table->dropColumn(["product_color"]);

        });
    }
}
