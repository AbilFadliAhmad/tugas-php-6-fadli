<?php 
    function hitungTotalNilai($nilai) {
        $total = 0;
        foreach ($nilai as $n) {
            $total += $n;
        }
        echo "Total Nilai: $total";
    }
    $daftarNilai = [75, 80, 85, 90, 95];
    hitungTotalNilai($daftarNilai)
?>