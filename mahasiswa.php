<?php
class Mahasiswa{
    public $nim;
    public $nama;
    public $kuliah;
    public $matakuliah;
    public $nilai;
    public $grade;
    public $predikat;
    public $status;


    public function __construct($nim, $nama,$kuliah,$matakuliah, $nilai){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
        $this->hitungGrade();
        $this->hitungPredikat();
        $this->hitungStatus();      
}
    public function hitungGrade(){
        if ($this->nilai>=85){
            $this->grade = 'A';
        }
        elseif ($this->nilai>=70){
            $this->grade = 'B';
        }
        elseif ($this->nilai>=69){
            $this->grade = 'C';
        }
        elseif ($this->nilai>=66){
            $this->grade = 'D';
        }
        else{
            $this->grade = 'E';
        }
    }


    public function hitungPredikat(){
        switch ($this->grade){
            case 'A':
                $this->predikat = 'Sangat Memuaskan';
                break;
            case 'B':
                $this->predikat = 'Memuaskan';
                break;
            case 'C':
                $this->predikat = 'Cukup';
                break;
            case 'D':
                $this->predikat = 'Kurang';
                break;
            default:
            $this->predikat = 'Sangat Kurang';
        }
    }


    public function hitungStatus(){
        // ternary
        $this->status =($this->nilai>=65)? 'Lulus' : 'Tidak Lulus';
    }
}
?>