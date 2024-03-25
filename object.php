<?php
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