<?php
class Lingkaran {
    //Property(sesuatu hal yang melekat pada class) atau variabel
    private $jari;
    const PHI = 3.14;

    //Method(perilaku dari property) atau function
    function __construct($r){
        $this->jari = $r;
    }

    function getLuas(){
        return self::PHI * $this->jari * $this->jari ;
    }

    function getKeliling(){
        return 2 * self::PHI * $this->jari;
    }
}

//instance Object
$lingkaran1 = new Lingkaran(10);
echo 'Luas Lingkaran 1 =' . $lingkaran1->getLuas();
echo '<br>Keliling Lingkaran 1 =' . $lingkaran1->getKeliling();
?>