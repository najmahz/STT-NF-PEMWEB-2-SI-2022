<?php
    //nama class
    class Lingkaran{
        private $jari;
        const PHI = 3.14;
        //method
        function __construct( $r )
        {
            $this->jari = $r;
        }
        function getLuas()
        {
            return self::PHI * $this->jari * $this->jari;
        }
        function getKeliling()
        {
            return 2 * self::PHI * $this->jari;
        }
    }  
   echo "NILAI PHI " . Lingkaran::PHI;
   $lingkar1 = new Lingkaran(10);
   $lingkar2 = new Lingkaran(4);
   echo "<br/>Luas Lingkaran 1 ".$lingkar1->getLuas();
   echo "<br>Luas Lingkaran 2 ".$lingkar2->getLuas();
   echo "<br/>Keliling Lingkaran 1 ".$lingkar1->getKeliling();
   echo "<br>Keliling Lingkaran 2 ".$lingkar2->getKeliling();
?>