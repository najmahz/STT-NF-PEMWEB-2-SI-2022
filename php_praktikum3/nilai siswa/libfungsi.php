<?php
    function isPass($nilai_akhir){
        if ($nilai_akhir > 55) {
            return "LULUS";
        } else {
            return "TIDAK LULUS";
        }
    }
    
    function grade($nilai_akhir){
        if($nilai_akhir>=85){
            'A';
        }elseif ($nilai_akhir>=70) {
            return 'B';
        }elseif ($nilai_akhir>=56){
            return 'C';
        }elseif ($nilai_akhir>=36){
            return 'D';
        }elseif($nilai_akhir>=0){
            return 'E';
        }else{
            return 'I';
        }
    }

    function predikat($grade){
        switch ($grade){
            case 'A' :
                return 'Sangat Memuaskan';
                break;
            case 'B' :
                return 'Memuaskan';
                break;
            case 'C' :
                return 'Cukup';
                break;
            case 'D' : 
                return 'Kurang';
                break;
            case 'E' : 
                return 'Sangat Kurang';
                break;
        default:
            return 'Tidak Ada';
            break;
        }
    }
?>