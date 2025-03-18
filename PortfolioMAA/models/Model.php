<?php
class Model {
    public static function getCompetences() {
        return [
            [
                "nom" => "Développement web & mobile",
                "niveau" => 85,
                "image" => "public/images/competences/dev-web-mobile.png" // Chemin de l'image
            ],
            [
                "nom" => "Gestion de bases de données",
                "niveau" => 75,
                "image" => "public/images/competences/gestion-bdd.png" // Chemin de l'image
            ],
            [
                "nom" => "Programmation orientée objet",
                "niveau" => 90,
                "image" => "public/images/competences/poo.png" // Chemin de l'image
            ],
            [
                "nom" => "Analyse des besoins et conception logicielle",
                "niveau" => 80,
                "image" => "public/images/competences/analyse-conception.png" // Chemin de l'image
            ]
        ];
    }
    public static function getProjets() {
        return [
            [
                "titre" => "Lavage auto",
                "description" => "Un projet qui ma familiariser avec le mvc et les bases de données",
                "image" => "public/images/LavageAuto",
                "lien" => "http://localhost/LavageAuto/views/"
            ],
            [
                "titre" => "Site Web Lycées Guadeloupe",
                "description" => "Un projet en equipe tres interessant",
                "image" => "public/images/genteldev",
                "lien" => "http://localhost/Gentle%20dev/Gentle-dev-test-thomas/"
            ],
            [
                "titre" => "Projet Aichi",
                "description" => "Un projet cool",
                "image" => "public/images/Aichi",
                "lien" => "https://github.com/Heloiisee/Projet_Aichi.git"
            ],
            [
                "titre" => "Bibliotheque de jeux",
                "description" => "Un projet cool",
                "image" => "public/images/bibliotheque",
                "lien" => "https://github.com/kazuto971/Biblioth-que_jeux-.git"
            ],
            [
                "titre" => "Projet 2",
                "description" => "Un autre projet sympa",
                "image" => "public/images/projet2.jpg",
                "lien" => "https://exemple.com/projet2"
            ]
        ];
    }
}
?>