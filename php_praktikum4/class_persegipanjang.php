<?php
    class persegiPanjang {
    // Properties
        public $width;
        public $height;

    // Methods
        function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }
        // Panjang & Lebar
        function getWidth() {
            return $this->width;
        }
        function getHeight() {
            return $this->height;
        }
        // Luas  
        function getArea() {
            return $this->width * $this->height;
        }
        // Keliling  
        function getPerimeter() {
            return 2 * ($this->width + $this->height);
        }
    }

    echo "<h3>Luas dan Keliling Persegi Panjang</h3>";
    $bentuk1 = new persegiPanjang(4, 6);
    echo "Persegi panjang dengan panjang dan lebar 4 x 6 cm memiliki";
    echo "<br>Luas = ".$bentuk1->getArea() ." cm^2";
    echo "<br>Keliling = ".$bentuk1->getPerimeter()." cm";
?>