<?php
     $nilai = 89;

     $kompeten = ($nilai >= 75) ? 'kompeten': 'belum kompeten';
     $color = ($nilai >= 75) ? 'green': 'red';

     echo "nilai kompeten : {$nilai} <span style='color: {$color};'>($kompeten)</span>";

?>