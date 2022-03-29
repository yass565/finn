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
            $table->enum('typeVente', array('Acheter', 'Louer', 'Achat demandée'));
            $table->string('max_price');
            $table->enum('typeSearch', array('A vendre', 'A louer', 'donner', 'Achat demandé', 'Vendu les trois derniers jours',
            'Venir pour la vente'));

            $table->enum('typeLogement', array('Apartements', 'Garage / Stationnement', 'maison individuelle', 'Villa','Maison jumelée',
             'Hôtel / Hébérgement', 'Centre commerciale', 'Chambres Combinnées', 'Entrepôt / Logistique' ,'Projet',
             'Cantine', 'Atelier', 'Maison dans la ville', 'Maison de loger', 'Chambres en colocations', 'Attique', 'Duplex', 'Studio',
              'Maison à l\'extérieur des villes', 'Autres types de fermes', 'Camping', 'Petite ferme', 'Tente à la montagne',
              'Tente sur la plage', 'Bateau', 'Autres'));

            $table->enum('formeoeuf', array('Action', 'Partager', 'Propriétaire'));

            $table->enum('privercourtierentreprise', array('Courtier', 'Privé', 'Entreprise'));

            $table->enum('récit', array('Pas au 1er étage', '2ème étage', '3ème étage', '4ème étage', '5ème étage'));

            $table->enum('Installations', array('Balcon / Terrasse', 'Garage / Parking', 'Ascenseur', 'Aucun résident',
             'Option de recharge', 'Cheminée / Foyer', 'Rivage', 'Terrain de randonée', 'Conciergerie', 'Animaux acceptés', 'Piscine',
              'Climatisation', 'Placard', 'Gril', 'Accès Internet', 'Lave-vaisselle', 'Machine à laver',
               'Jacuzzi', 'Sauna', 'Jardin', 'Cuisine', 'Vue sur la mer', 'Cabines de douche',
                'Avec une vue', 'Avec un littoral', 'Articles de sport', 'Accessible aux fauteuils roulants', 'Autre'));
            
                $table->enum('InstallationsPromixiter', array('Sur des terres agricoles', 'Sur la montagne', 'Ligne de plage', 'Par la mer', 'Possibilité de pêche',
                'Terrain de golf', 'Terrain de tourter', 'A côté de l\'Aéroport', 'Option du transports',
                'Badeland', 'Plage de baignade', 'Possibilité de chasse', 
                'Possibilité de safari', 'Terrain de jeux', 'Oeufs alpins',
                'Possibilité de skier', 'Salle de natation', 'Tennis', 'Football',
                'Sports nautiques'));

                $table->enum('InstallationsAlimentaires', array('Boulangerie', 'Épicerie', 'Restaurant',
                'Marché / Souk', 'Marché de viande', 'Marché des poissons'));

            $table->enum('InstallationAgriProp', array('Panneau solaire', 'Eau municipale pour l\'irrigation', 'Vers le chemin de la propriété'
            ,'Eaux publiques / égouts', 'Garage / place de stationnement', 'Puissance intégrée', 'Villa', 'ferme d\'animaux'
            , 'Eau intégrée', 'Cheminée', 'Avec une vue', 'Piscine', 'Gardien / service de sécurité', 'Climatisation', 'Jardin'));

            $table->enum('InstallationPlots', array('Vide sur le coin',
             'Terrain plus proche de la plage', 'Vide à la porte principale',
             'Terrain en zone villa', 'Terrain pour appartements en bloc', 'Terrain pour grands projets immobiliers', 'Autres'));

             $table->enum('InstallationAgri', array('Vide sur le coin',
             'Terrain plus proche de la plage', 'Vide à la porte principale', 'Non commerciale', 'Autres'));

            $table->enum('typeTerrainAgriProp', array('Terrain avec arbres fruitiers', 'Terrain avec olives',
            'Parcelle aux amandes', 'Parcelle de légumes', 'À court de céréales', 'Autres'));

            $table->enum('typeMaisonAgriProp', array('Ferme d\'animaux', 'Maison de ferme', 'Villa de ferme',
                    'Autres'));

            $table->enum('typeTerrainAgri', array('Terrain arboré', 'Terrain vide',
            'Terrain avec animaux', 'Terrain en montagne', 'Terrain avec puits', 'Terres irriguées', 'Autres'));

            $table->enum('typeTerritoire', array('Terrain de Turter', 'Parcours de golf', 'Possibilités de pêche',
            'Par la mer', 'Ligne de plage', 'Sur la montagne', 'Sur des terres agricoles'));

            $table->enum('typeEnergy', array('Action', 'Partager', 'Propriétaire'));

            $table->enum('typeLocation', array('intérieur', 'A la montagne', 'Au bord de la mer'));

            $table->enum('Energies', array('A', 'B', 'C', 'D', 'E', 'F'));

            $table->enum('Bains', array('1', '2', '3', '4', '+5'));

            $table->enum('Chambres', array('1', '2', '3', '4','+5'));

            $table->enum('personnes', array('1', '2', '3', '+4'));

            // Category two (Commercial property)
            $table->enum('TypeLocaux', array('Appartement / Maison multifamiliale',
             'Garage / Stationnement', 'Ferme / Petite ferme', 'Hébergement à l\'hôtel',
                'Centre commercial', 'Chambres combinées', 'Entrepôt / Logistique',
                'Salles à manger / Cantine', 'Enseignement / Evénementiel',
                 'Locaux du restaurant', 'Garage pour atelier', 'Lavage', 'Usine','Production / Industrie',
                 'Magasin / Commerce', 'Kiosque local', 'Magasin sur la rue principale',
                  'Magasin en centre commercial', 'Magasin sur coin', 'Bureau', 'Bureau dans la communauté',
                  'Plusieurs bureaux', 'Locaux de bureaux de plus de 1000 m²', 'Bureau finement meublé', 'Autres'));

            $table->enum('TypeIndustrie',array('Agence', 'Boutique / Kiosque', 'Coiffeur / Bien-être', 
                        'Hébergement à l\'hôtel', 'Agriculture / Sylviculture / Pêche', 'Boutique en ligne / site Web',
                            'Restaurant / Café', 'Atelier mécanique', 'Autres'));

            $table->enum('TypeTerrainCommercialPlots',array('Terrain pour magasin / Terrain Commerciale', 'Terrain pour quartier résidentiel',
                'Terrain Hors de l\'hôtel', 'Terrain pour le touriste', 'Terrain pour restaurant / Café',
                'Terrain pour l\'enseignement / l\'événement', 'Terrain pour immeuble de bureaux', 'Lavage', 'Terrain pour Production / Industrie',
                'Hors Entrepôt / Logistique', 'Tomate pour l\'atelier / Production', 'Espace pour salle de lavage',
                'Terrain pour atelier', 'Sortie d\'usine', 'Autres'));

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
