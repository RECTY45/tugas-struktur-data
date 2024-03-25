<?php  
   $string = "Fery Fadul Rahman";
   $integer = 12345;
   $float = 50.45;
   $boolean = true;
   $array =  array("Fery","Bintang","Andika","Faiz");
   $null = null;
   $angka = 10;

     var_dump($string);

     echo "<br>";
     echo "<br>";

     var_dump($integer);

     echo "<br>";
     echo "<br>";

     var_dump($float);

     echo "<br>";
     echo "<br>";

     var_dump($boolean);

    if ($boolean == true) {
        echo " = Ini Adalah True";
    }else {
        echo " = Ini Adalah False";
    }


     echo "<br>";
     echo "<br>";

     var_dump($array);

     echo "<br>";
     echo "<br>";

     var_dump($null);

     echo "<br>";
     echo "<br>";

     function Kurang()
     {
         global $angka;
 
         $angka -= 5;
     }
     Kurang();
     echo $angka;

     echo "<br>";
     echo "<br>";

     function Local()
     {
         $angka = 10;
         echo $angka;
     }

     Local();

     echo "<br>";
     echo "<br>";


    class Motor
    {
        public $color;
        public $type;
        public $merek; 
        public function __construct($color,$type,$merek){
            $this->color = $color;
            $this->type = $type;    
            $this->merek = $merek;
        } 
    }

    $Object = New Motor("Blue","Suzuki","Ninja Zx25 R");

    var_dump($Object);
