<?php 

// /** Fruit class
//  * @author Raff raffl@email.com
//  * @copyright 2021 Raff
//  * 
//  * 
//  */

// class Fruit {

//     public $name;
//     public $color;
//     public $taste;

//     function __construct(string $name, string $color, string $taste){
//         $this->name = $name;
//         $this->color = $color;
//         $this->taste = $taste;

//     }

// }

// $apple = new Fruit('apple', 'red', 'sweet');
// $banana = new Fruit('banana', 'yellow', 'sweet');
// $mango = new Fruit ('mango', 'orange', 'sweet');

// var_dump($apple, $banana, $mango);

// $fruitsList = [$apple,$banana,$mango];

// var_dump($fruitsList);

// $fruits = [

//     'apple'=> new Fruit('apple', 'green', 'sour'),
//     'banana'=> new Fruit('banana', 'yellow', 'sweet'),
//     'mango'=> new Fruit('mango', 'orange', 'sweet'),

// ];

// var_dump($fruits);

/////////////////////////////////////////////////////////////////////////

// /** Studente Class
//  * @author Raff raffl@email.com
//  * @copyright 2021 Raff
//  * 
//  * 
//  */

// class Studente {

//     public $name;
//     public $cognome;
//     public $indirizzo;
//     public $città;

//     function __construct(string $name, string $cognome, string $indirizzo, string $città){
//         $this->name = $name;
//         $this->cognome = $cognome;
//         $this->indirizzo = $indirizzo;
//         $this->città = $città;
//     }

//     public function setIndirizzo(string $indirizzo){

//         $this->indirizzo = $indirizzo;

//     }

//     public function getCittà(){

//         return $this->città;
//     }

// }

// $Raffaele = new Studente ('Raffaele', 'Baldassarre', 'via Berrettaro','Palermo');
// $Andrea = new Studente ('Andrea', 'Di Cataldi', 'ndr','Rho');
// $Pia = new Studente ('Maria Pia', 'Gianguzzi', 'via Limina','Barcellona Pozzo di Gotto');

// var_dump($Raffaele, $Andrea, $Pia);

// $Andrea->setIndirizzo("via delle ginestre");

// $Studenti = [$Raffaele, $Andrea, $Pia];

// var_dump($Studenti);
// var_dump($Raffaele->getCittà());

/////////////////////////////////////////////////////////////////////////

/**  Film Class
* @author Raff raff@email.com
* @copyright 2021 Raff
*
*
*/

class Film{

    public $title;
    public $genere;
    public $regista;
    public $distribuzione;

    function __construct(string $title, string $genere, string $regista, string $distribuzione){
        $this->title = $title;
        $this->genere = $genere;
        $this->regista = $regista;
        $this->distribuzione = $distribuzione;

    }

    public function setTitle(string $title){

    $this->title = $title;

    }

    public function getTitle(){
        return $this->title;
    }

    public function getGenere(){
        return $this->genere;
    }

    public function getRegista(){
        return $this->regista;
    }

    public function getDistribuzione(){
        return $this->distribuzione;
    }

}

$Arancia_Meccanica = new Film ('Arancia Meccanica', 'grottesco, drammatico, thriller, fantascienza' ,'Stanley Kubrick', 'Warner Bros.');
$Kill_Bill = new Film('Kill Bill','azione, thriller, grottesco','Quentin Tarantino','Miramax Films');
$Indiana_Jones = new Film("Indiana Jones e l'ultima crociata",'avventura, azione, commedia, fantastico','Steven Spielberg','Paramount');

$Films = [$Arancia_Meccanica, $Kill_Bill, $Indiana_Jones];
// var_dump($Films);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container{
        margin-top: 100px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .card{
        padding: 30px;
        margin: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 45%;
        border: 2px solid black;
        border-radius: 20px;
    }

    .card:hover{
        background-color: aqua;
        cursor: pointer;
    }


    </style>
</head>
<body>

<main>   
        <div class="container">
            <?php

                $Kill_Bill->setTitle("Kill Bill: Volume 1");

                foreach ($Films as $value) { ?>
                    <div class="card">
                        <h2> <?php echo $value -> getTitle() ?></h2>
                        <p> Genere: <?php echo $value -> getGenere() ?></p>
                        <h3> <?php echo $value -> getRegista() ?></h3>
                        <p> <?php echo $value -> getDistribuzione() ?></p>
                    </div>
            <?php } ?>
        </div>
    </main>

</body>
</html>
