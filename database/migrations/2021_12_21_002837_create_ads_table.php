<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            /* $table->unsignedBigInteger('category_id');
             $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('restrict')
                ->onUpdate('restrict'); */
            /* $table->unsignedBigInteger('sub_category_id');
            $table->foreign('sub_category_id')
                ->references('id')
                ->on('subcategories')
                ->onDelete('restrict')
                ->onUpdate('restrict'); */
            $table->unsignedBigInteger('big_city_id');
            $table->foreign('big_city_id')
                ->references('id')
                ->on('bigcities')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->string('title');
            $table->string('price');
            $table->text('short_desc');
            $table->string('multi_image');
            $table->text('description');
            $table->text('specification');
            $table->text('other_details');
            $table->text('lat');
            $table->text('lng');
            $table->integer('type');
            $table->string('ads_status');
            $table->enum('status', array('Active', 'Deactive', 'Delete'));
            $table->enum('etat', array('Neuf', 'Occasion'));
            $table->enum('typeVente', array('Acheter', 'Louer'));
            $table->string('max_price');
            $table->enum('typeSearch', array('A vendre', 'donner', 'Achat demandé'));
            $table->enum('typeLogement', array('Apartements', 'Garage / Stationnement',
             'Hôtel / Hébérgement', 'Centre commerciale', 'Chambres Combinnées', 'Entrepôt / Logistique'
            ,'Projet', 'Cantine', 'Atelier', 'Autres'));
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
        Schema::dropIfExists('ads');
    }
}
