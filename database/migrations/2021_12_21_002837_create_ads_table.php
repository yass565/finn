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

            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')
                ->references('id')
                ->on('brands')
                ->onDelete('restrict')
                ->onUpdate('restrict');

                $table->unsignedBigInteger('modele_id');
                $table->foreign('modele_id')
                    ->references('id')
                    ->on('modeles')
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
            $table->enum('typeVente', array('Acheter', 'Louer', 'Achat demand??e'));
            $table->string('max_price');
            $table->enum('typeSearch', array('A vendre', 'A louer', 'donner', 'Achat demand??', 'Vendu les trois derniers jours',
            'Venir pour la vente'));

            $table->enum('typeLogement', array('Apartements', 'Garage / Stationnement', 'maison individuelle', 'Villa','Maison jumel??e',
             'H??tel / H??b??rgement', 'Centre commerciale', 'Chambres Combinn??es', 'Entrep??t / Logistique' ,'Projet',
             'Cantine', 'Atelier', 'Maison dans la ville', 'Maison de loger', 'Chambres en colocations', 'Attique', 'Duplex', 'Studio',
              'Maison ?? l ext??rieur des villes', 'Autres types de fermes', 'Camping', 'Petite ferme', 'Tente ?? la montagne',
              'Tente sur la plage', 'Bateau', 'Autres'));

            $table->enum('formeoeuf', array('Action', 'Partager', 'Propri??taire'));

            $table->enum('privercourtierentreprise', array('Courtier', 'Priv??', 'Entreprise'));

            $table->enum('r??cit', array('Pas au 1er ??tage', '2??me ??tage', '3??me ??tage', '4??me ??tage', '5??me ??tage'));

            $table->enum('Installations', array('Balcon / Terrasse', 'Garage / Parking', 'Ascenseur', 'Aucun r??sident',
             'Option de recharge', 'Chemin??e / Foyer', 'Rivage', 'Terrain de randon??e', 'Conciergerie', 'Animaux accept??s', 'Piscine',
              'Climatisation', 'Placard', 'Gril', 'Acc??s Internet', 'Lave-vaisselle', 'Machine ?? laver',
               'Jacuzzi', 'Sauna', 'Jardin', 'Cuisine', 'Vue sur la mer', 'Cabines de douche',
                'Avec une vue', 'Avec un littoral', 'Articles de sport', 'Accessible aux fauteuils roulants', 'Autre'));
            
                $table->enum('InstallationsPromixiter', array('Sur des terres agricoles', 'Sur la montagne', 'Ligne de plage', 'Par la mer', 'Possibilit?? de p??che',
                'Terrain de golf', 'Terrain de tourter', 'A c??t?? de l A??roport', 'Option du transports',
                'Badeland', 'Plage de baignade', 'Possibilit?? de chasse', 
                'Possibilit?? de safari', 'Terrain de jeux', 'Oeufs alpins',
                'Possibilit?? de skier', 'Salle de natation', 'Tennis', 'Football',
                'Sports nautiques'));

                $table->enum('InstallationsAlimentaires', array('Boulangerie', '??picerie', 'Restaurant',
                'March?? / Souk', 'March?? de viande', 'March?? des poissons'));

            $table->enum('InstallationAgriProp', array('Panneau solaire', 'Eau municipale pour l irrigation', 'Vers le chemin de la propri??t??'
            ,'Eaux publiques / ??gouts', 'Garage / place de stationnement', 'Puissance int??gr??e', 'Villa', 'ferme d animaux'
            , 'Eau int??gr??e', 'Chemin??e', 'Avec une vue', 'Piscine', 'Gardien / service de s??curit??', 'Climatisation', 'Jardin'));

            $table->enum('InstallationPlots', array('Vide sur le coin',
             'Terrain plus proche de la plage', 'Vide ?? la porte principale',
             'Terrain en zone villa', 'Terrain pour appartements en bloc', 'Terrain pour grands projets immobiliers', 'Autres'));

             $table->enum('InstallationAgri', array('Vide sur le coin',
             'Terrain plus proche de la plage', 'Vide ?? la porte principale', 'Non commerciale', 'Autres'));

            $table->enum('typeTerrainAgriProp', array('Terrain avec arbres fruitiers', 'Terrain avec olives',
            'Parcelle aux amandes', 'Parcelle de l??gumes', '?? court de c??r??ales', 'Autres'));

            $table->enum('typeMaisonAgriProp', array('Ferme d animaux', 'Maison de ferme', 'Villa de ferme',
                    'Autres'));

            $table->enum('typeTerrainAgri', array('Terrain arbor??', 'Terrain vide',
            'Terrain avec animaux', 'Terrain en montagne', 'Terrain avec puits', 'Terres irrigu??es', 'Autres'));

            $table->enum('typeTerritoire', array('Terrain de Turter', 'Parcours de golf', 'Possibilit??s de p??che',
            'Par la mer', 'Ligne de plage', 'Sur la montagne', 'Sur des terres agricoles'));

            $table->enum('typeEnergy', array('Action', 'Partager', 'Propri??taire'));

            $table->enum('typeLocation', array('int??rieur', 'A la montagne', 'Au bord de la mer'));

            $table->enum('Energies', array('A', 'B', 'C', 'D', 'E', 'F'));

            $table->enum('Bains', array('1', '2', '3', '4', '+5'));

            $table->enum('Chambres', array('1', '2', '3', '4','+5'));

            $table->enum('personnes', array('1', '2', '3', '+4'));

            $table->enum('Prix', array('Prix par jour', 'Prix par mois', 'Prix par weekend', 'Prix par an'));

            // Category two (Commercial property)
            $table->enum('TypeLocaux', array('Appartement / Maison multifamiliale',
             'Garage / Stationnement', 'Ferme / Petite ferme', 'H??bergement ?? l h??tel',
                'Centre commercial', 'Chambres combin??es', 'Entrep??t / Logistique',
                'Salles ?? manger / Cantine', 'Enseignement / Ev??nementiel',
                 'Locaux du restaurant', 'Garage pour atelier', 'Lavage', 'Usine','Production / Industrie',
                 'Magasin / Commerce', 'Kiosque local', 'Magasin sur la rue principale',
                  'Magasin en centre commercial', 'Magasin sur coin', 'Bureau', 'Bureau dans la communaut??',
                  'Plusieurs bureaux', 'Locaux de bureaux de plus de 1000 m??', 'Bureau finement meubl??', 'Autres'));

            $table->enum('TypeIndustrie',array('Agence', 'Boutique / Kiosque', 'Coiffeur / Bien-??tre', 
                        'H??bergement ?? l h??tel', 'Agriculture / Sylviculture / P??che', 'Boutique en ligne / site Web',
                            'Restaurant / Caf??', 'Atelier m??canique', 'Autres'));

            $table->enum('TypeTerrainCommercialPlots',array('Terrain pour magasin / Terrain Commerciale', 'Terrain pour quartier r??sidentiel',
                'Terrain Hors de l h??tel', 'Terrain pour le touriste', 'Terrain pour restaurant / Caf??',
                'Terrain pour l enseignement / l ??v??nement', 'Terrain pour immeuble de bureaux', 'Lavage', 'Terrain pour Production / Industrie',
                'Hors Entrep??t / Logistique', 'Tomate pour l atelier / Production', 'Espace pour salle de lavage',
                'Terrain pour atelier', 'Sortie d usine', 'Autres'));

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
