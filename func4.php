<?php 
    function cekKelulusan($nilai) {
        if ($nilai >= 75) {
            echo "Lulus";
        } else {
            echo "Tidak Lulus";
        }
    }
    cekKelulusan(74)
?>