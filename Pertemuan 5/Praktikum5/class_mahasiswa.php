<?php
class Mahasiswa {
    //propery
    public $ipk;
    public $nama;
    public $nim;
    public $prodi;
    public $angkatan;

    //method
    function __construct($_nim, $_nama,) {
        $this->nim = $_nim;
        $this->nama = $_nama;
    }

    function predikat_ipk(){
        if($this->ipk < 2.0 ){
            return 'CUKUP';
        }
        else if($this->ipk >= 2.0 && $this->ipk <= 3.0){
            return 'BAIK';
        }
        else if($this->ipk >= 3.0 && $this->ipk <= 3.75){
            return 'MEMUASKAN';
        }
        else if($this->ipk > 3.75 && $this->ipk <=4.0) {
            return 'CUM LAUDE';
        }
        else {
            return 'NILAI TIDAK TERDETEKSI';
        }
    }
}

//Instance Object
$mahasiswa1 = new Mahasiswa(1101212,'Rido Firmansyah');
$mahasiswa1->ipk = 3.75;
$mahasiswa1->prodi = 'Sistem Informasi';
$mahasiswa1->angkatan = 2021;


?>
