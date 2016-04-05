<?php

/**
 * Izpis na zaslon
 */
    echo 'Hello world!';
    print('Hello world!');
    print_r('Hello world');
    var_dump('Hello world!');


/**
 * Komentiranje
 */

// enovrstični komentar

/**
 * večvrstični komentar
 */


/**
 * Spremenljivke
 */
    // Definiranje spremenljivk
    $name = 'John Doe';
    $job = 'programer';
    $serialNumber = 123;

    // Izpis spremenljivk
    echo "Jaz sem <b>$name</b>, po poklicu sem <b>$job</b>. Moja serijska številka je <b>$serialNumber</b>.";

    // Prirejanje vrednosti spremenljivk
    $dob = 10;
    $age = $dob + 15;				    // 25
    $angle1 = $angle2 = $angle3 = 60;	// 60
    $dob += 10;					        // 20
    $dob++;						        // 21
    $dob--;						        // 20

    // Velja / ne velja (boolean)
    $auth = true;
    $admin = false;

    // Številke in nizi
    $age = 99; 				       // cela števila
    $temperature = 26.89; 		   // decimalna števila
    $sentence = "To je stavek.";   // niz znakov

    // Starost je 99, temperatura je 26.89, stavek je: To je stavek.
    $allTogether = 'Starost je ' . $age . ', temperatura je ' . $temperature . ', stavek je: ' . $sentence;


/**
 * Aritmetične operacije
 */
    $sestevanje = 5+5;	    // 10
    $odstevanje = 10-5;	    // 5
    $mnozenje = 5*5;		// 25
    $deljenje = 26/5;	    // 5.2
    $ostanek = 27/5;		// 2


/**
 * Logične  operacije
 */
    $manjse = 5 < 10;
    $vecje = 10 > 5;
    $manjseAliEnako = 5 <= 10;
    $vecjeAliEnako = 10 >= 10;
    $jeEnako = 10 == 10;
    $niEnako = 5 != 10;
    $jeRazlicno = 5 <> 10;
    $jeEnakoInEnakegaTipa = 10 === 10;	        // true
    $jeEnakoInEnakegaTipa = 10 === '10';	    // false
    $in = (($auth == true) && ($status != 0));
    $ali = (($auth == false) || ($status == 0));
    $xor = (($status == 1) xor ($auth == 1));	// vrne true, če sta oba pogoja true in vrne false, če sta oba pogoja false


/**
 * Konstante (constant)
 */
    define('MAX_VALUE', '1.0');	    // se uporablja zunaj razreda
    const MAX_VALUE = 1.0;		    // se uporablja v razredu


/**
 * Pogojni stavki (if condition)
 */

    // Preprost pogojni stavek
    if ($color == 'red') {
        echo ('Color is red.');
    }

    // Če ni zadoščen prvi pogoj, upoštevaj drugi pogoj
    if ($color == 'red') {
        echo ('Color is red.');
    } else {
        echo ('Color is not red.');
    }

    // Če ni zadoščen prvi pogoj in drugi pogoj, upoštevaj tretji pogoj
    if ($color == 'red') {
        echo ('Color is red.');
    } elseif ($color == 'blue') {
        echo ('Color is blue.');
    } else {
        echo ('Color is neither red or blue.');
    }

    // Gnezdenje pogojnih stavkov
    if ($day == 'Friday') {
        if ($time == '1600') {
            if ($country == 'SI') {
                $event = 'The weekend is here.';
            }
        }
    }

    // zgornji primer lahko zapišemo tudi na spodnji način
    if ($day == 'Friday' && $time == '1600' && $country == 'SI') {
        $event = 'The weekend is here.';
    }


/**
 * Pridobitev podatkov
 */

// HTML
/**
 * <form method='POST' action='submit.php'>
 *     <input type='text' name='imeDneva'>
 * </form>
 */

// PHP (v submit.php)
 $day = $_POST['imeDneva'];


/**
 * Množice (array)
 */
    $pizzaToppings = array('tomato', 'cheese', 'ham', 'pepperoni');
    $pizzaToppings = ['tomato', 'cheese', 'ham', 'pepperoni'];          // >5.4
    print_r($pizzaToppings);

    // Definicija množice
    $pasta = array();	// $pasta = [];
    $pasta[0] = 'spaghetti';
    $pasta[1] = 'penne';
    $pasta[2] = 'macaroni';
    $pasta[] = 'tuna';		// tuna is now on $pasta[4] and so on

    // Niz kot ključ v množici
    $menu['breakfast'] = 'bacon and eggs';
    $menu['lunch'] = 'roast beef';
    $menu['dinner'] = 'lasagna';

    // Funkcije nad množicami
    // array_push, array_pop, array_shift, array_unshift, sort, rsort

    // Razdelitev niza v množico in obratno
    $str = 'red, blue, green, yellow';
    $colors = explode(', ', $str);
    $str = implode(' and ', $colors);


/**
 * Zanke (loop)
 */

    // Switch
    switch ($day) {
        case 1:
            $special = 'Chicken in oyster sauce';
            break;
        case 2:
            $special = 'French onion soup';
            break;
        case 3:
            $special = 'Pork chops with mashed potatoes and salad';
            break;
        default:
            $special = 'Fish and chips';
            break;
    }

    // While
        $upperLimit = $_POST['limit'];
        $lowerLimit = 1;

        // izpisuj številke, dokler spodnja ni enaka zgornji vrednosti
        while ($lowerLimit <= $upperLimit) {
            echo $lowerLimit . '&nbsp;';
            $lowerLimit++;
        }

    // Do-While
        // izpisuj številke, dokler spodnja ni enaka zgornji vrednosti
        do {
            echo $lowerLimit . '&nbsp;';
            $lowerLimit++;
        } while ($lowerLimit <= $upperLimit);

    // For
        $number = 13;

        // izpiši poštevanko za določeno število
        for ($x = 1; $x <= 10; $x++) {
            echo "$number x $x = " . ($number * $x) . "<br />";
        }

    // Foreach (izvajamo nad množicami)
        $artists = array('Metallica', 'Evanescence', 'Linkin Park');
        foreach ($artists as $artist) {
            echo ('<li>' . $a . '</li>');
        }


/**
 * Datoteke (files)
 */

    // priprava datoteke za branje
    $file = '/var/www/mysite/myfile.txt' or die('Could not open file!');

    // odpri datoteko
    $fh = fopen($file, 'r') or die('Could not open file!');

    // preberi vsebino datoteke in velikost
    $data = fread($fh, filesize($file)) or die('Could not read file!');

    // zapri datoteko
    fclose($fh);

    // namesto zgornjih treh ukazov lahko uporabimo
    $data = file_get_contents($file) or die('Could not read file!');

    // spremenljivki pripnemo vsebino
    $data .= " John Doe\n";

    // zapišemo vsebino nazaj v datoteko
    file_put_contents($file, $data);

    // izpiši vsebino datoteke
    echo $data;

    // Vklučevanje datotek
    include('header.php');


/**
 * Funkcije in metode (functions, methods)
 */

    // Funkcija brez parametrov
        // definirajmo funkcijo
        function myStandardResponse() {
            echo "I like rock'n'roll music.";
        }

        // vprašanje in odgovor
        echo "Kakšna glasba ti je všeč?<br />";

        myStandardResponse();

    // Funkcija s parametrom
        // definirajmo funkcijo
        function myStandardResponseAgain($typeOfMusic) {
            echo "I like $typeOfMusic music.";
        }

        // vprašanje in odgovor
        echo "Kakšna glasba ti je všeč?<br />";

        myStandardResponseAgain("rock'n'roll");

    // Funkcija z več parametri in opcijskim parametrom
        // definirajmo funkcijo
        function calculateTotalPrice($product1, $product2, $product3 = 10) {
            echo ($product1 + $product2 + $product3) . ' €';
        }

        // vprašanje in odgovor
        echo "Skupna cena je: ";

        calculateTotalPrice(100, 12.55, 20);    // Skupna cena je: 132.55 €
        calculateTotalPrice(100, 12.55);        // Skupna cena je: 122.55 €

    // Funkcija z neznanim številom parametrov
        function calculateTotalPriceAgain() {
            $args = func_get_args();
            foreach ($args as $arg) {
                $arg += $arg;
            }
            echo "Skupna cena je: " . ($arg) . ' €';
        }

        calculateTotalPriceAgain(10,20,30);	    // Skupna cena je 60 €

        $args = func_num_args();
        echo ($args);	                        // 3

    // Vpliv na parameter v funkciji
        $today = "Sobota";

        function setDay(&$day) {
            if ($day == 'Sobota') {
                $day = 'Torek';
            }

            return $day;
        }

        echo $today;	// Sobota

        setDay($today);

        echo $today;    // Torek


/**
 * Razredi in objekti (class, object)
 */

// Ustvarimo nov objekt v datoteki Bear.php

class Bear {

    // definicija lastnosti
    public $name;
    public $weight;
    public $age;
    public $sex;
    public $colour;

    // definicija metod
    public function eat() {
        echo $this->name." is eating...";
    }

    public function run() {
        echo $this->name." is running...";
    }

    public function kill() {
        echo $this->name." is killing prey...";
    }

    public function sleep() {
        echo $this->name." is sleeping...";
    }
};

// V drugi php datoteki ustvarimo tri objekte in jim dodelimo različne vrednosti.

    // my first bear
    $daddy = new Bear;
    $daddy->name = "Daddy Bear";	// give him a name
    $daddy->age = 8;				// how old is he
    $daddy->sex = "male";			// what sex is he
    $daddy->colour = "black";		// what colour is his coat
    $daddy->weight = 300;			// how much does he weigh 

    // give daddy a wife
    $mommy = new Bear;
    $mommy->name = "Mommy Bear";
    $mommy->age = 7;
    $mommy->sex = "female";
    $mommy->colour = "black";
    $mommy->weight = 310;

    // and a baby to complete the family
    $baby = new Bear;
    $baby->name = "Baby Bear";
    $baby->age = 1;
    $baby->sex = "male";
    $baby->colour = "black";
    $baby->weight = 180;

    // a nice evening in the Bear family
    // daddy kills prey and brings it home
    $daddy->kill();

    // mommy eats it
    $mommy->eat();

    // and so does baby
    $baby->eat();

    // mommy sleeps
    $mommy->sleep();

    // and so does daddy
    $daddy->sleep();

    // baby eats some more
    $baby->eat();


/**
 * Public, protected, private, static
 */

// Public
    class GrandPa
    {
        public $name='Mark Henry';  // A public variable
    }

    class Daddy extends GrandPa // Inherited class
    {
        function displayGrandPaName()
        {
            // The public variable will be available to the inherited class
            return $this->name;
        }
    }

    // Inherited class Daddy wants to know Grandpas Name
    $daddy = new Daddy;
    echo $daddy->displayGrandPaName();                  // Prints 'Mark Henry'

    // Public variables can also be accessed outside of the class!
    $outsiderWantstoKnowGrandpasName = new GrandPa;
    echo $outsiderWantstoKnowGrandpasName->name;        // Prints 'Mark Henry'


// Protected
    class GrandPa
    {
        protected $name = 'Mark Henry';
    }

    class Daddy extends GrandPa
    {
        function displayGrandPaName()
        {
            return $this->name;
        }
    }

    $daddy = new Daddy;
    echo $daddy->displayGrandPaName();                  // Prints 'Mark Henry'

    $outsiderWantstoKnowGrandpasName = new GrandPa;
    echo $outsiderWantstoKnowGrandpasName->name;        // Results in a Fatal Error

// Private
    class GrandPa
    {
        private $name = 'Mark Henry';
    }

    class Daddy extends GrandPa
    {
        function displayGrandPaName()
        {
            return $this->name;
        }
    }

    $daddy = new Daddy;
    echo $daddy->displayGrandPaName();                  // Results in a Notice

    $outsiderWantstoKnowGrandpasName = new GrandPa;
    echo $outsiderWantstoKnowGrandpasName->name;        // Results in a Fatal Error

// Static
    class GrandPa
    {
        public static $name = 'Mark Henry';

        public static function displayGrandPaName()
        {
            return static::$name;
        }
    }

    echo GrandPa::$name;                                // Prints 'Mark Henry'
    echo GrandPa::displayGrandPaName();                 // Prints 'Mark Henry'
