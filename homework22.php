<!-- Preuzeti fajl domaci.php i koristiti fajl kao referencu za rađenje
domaćeg zadatka. Obratiti pažnju na konstruktore i na metode pri
dodeli proizvoljne vrednosti JSON svojstvu.
Zadatak 1. Napraviti zadatak1.json fajl koji predstavlja primer podatka
koji je objekat klase JSONZadJedan
Zadatak 2. Napraviti zadatak2.json fajl koji predstavlja primer podatka
koji je objekat klase JSONZadDva -->

<?php
//Zadatak 1
class JSONPrimer
{
    public $p1;
    public $p2;
    public $p3;

    function __construct(int $p1, string $p2, bool $p3)
    {
        $this->p1 = $p1;
        $this->p2 = $p2;
        $this->p3 = $p3;
    }
}

class JSONZadJedan
{
    public $j1;
    public $j2;

    function __construct(JSONPrimer $j1, JSONPrimer $j2)
    {
        $this->j1 = $j1;
        $this->j2 = $j2;
    }
}
//Zadatak 2
class JSONZadDva
{
    public $p1;
    public $p2;
    public $p3;

    function __construct(string $p1, string $p2)
    {
        $this->p1 = $p1;
        $this->p2 = $p2;
        $this->p3 = [];
    }

    function addP3(int $p3)
    {
        array_push($this->p3, $p3);
    }
}
?>
<?php
$JSonPrimer = new JSONPrimer("2022", "Year", true);
var_dump(json_encode(($JSonPrimer)));

$objJSONZadDva = json_decode('{
    "p1": "Book",
    "p2": "SoldOut",
    "p3": [5]
}');
var_dump($objJSONZadDva);


var_dump(get_class($JSonPrimer));
var_dump(get_class_vars("JSONZadDva"));
var_dump(get_object_vars($JSonPrimer));

$file = file_get_contents("./task2.json");
var_dump($file);
var_dump(json_decode($file));
?>
<?php
$JSonPrimer = new JSONPrimer(2022, "Year", true);
var_dump(json_encode(($JSonPrimer)));

$objJSONZadJedan = json_decode('{
    "p1": 2022,
    "p2": "Year",
    "p3": true
}');
var_dump($objJSONZadJedan);
echo $objJSONZadJedan->p1, $objJSONZadJedan->p2, $objJSONZadJedan->p3;

var_dump(get_class($JSonPrimer));
var_dump(get_class_vars("JSONZadJedan"));
var_dump(get_object_vars($JSonPrimer));

$file = file_get_contents("./task1.json");
var_dump($file);
var_dump(json_decode($file));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>