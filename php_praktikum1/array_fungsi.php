<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Array</h1>
        <hr>
        <h3>4.1 Mendefinisikan array</h2>
            <?php
                $ar_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];
                // cetak buah ke index ke 2
                echo $ar_buah[2];
                // cetak jumlah buah
                echo '<br/>Jumlah Buah ' . count($ar_buah);
                // cetak seluruh buah
                echo '<ol>';
                foreach($ar_buah as $buah){
                        echo '<li>'. $buah .'</li>';
                    }
                    echo '</ol>';
                    // tambahkan buah
                    $ar_buah[]="Durian";
                    // hapus buah index ke 1
                    unset($ar_buah[1]);
                    // ubah buah index ke 2 menjadi Manggis
                    $ar_buah[2]="Manggis";
                    // cetak seluruh buah dengan index nya
                    echo '<ul>';
                    foreach($ar_buah as $k => $v){
                        echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
                    }
                    echo '</ul>';
            ?>
            <hr>

        <h3>4.2 Array Fungsi</h3>
            <h4>1.Fungsi sort($array)</h4>
                <?php
                $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
                echo '<ol>';
                foreach($ar_buah as $k =>$v){
                    echo '<li>'.$k.' - ' . $v .'</li>';
                    }
                    echo '</ol>';
                    sort($ar_buah);

                    echo '<p>Contoh lagi</p>';
                    echo '<ol>';
                    foreach($ar_buah as $k =>$v){
                        echo '<li>'.$k.' - ' . $v .'</li>';
                        }
                    echo '</ol>';
                ?>
            <hr>
            <h4>Array = ["Husnul","Farhan","Ibrahim","Hanif"]</h4>
                <?php
                    $team = ["Husnul","Farhan","Ibrahim","Hanif"];
                    echo '<ol>';
                    foreach($team as $keluarga){
                             echo '<li>'. $keluarga .'</li>';
                        }
                        echo '</ol>';
                ?>
            <hr>
            <h4>2. Fungsi array_pop($array)</h4>
                <?php
                    $team = ["Husnul","Farhan","Ibrahim","Hanif"];
                    array_pop($team);
                    foreach($team as $person){
                        echo $person. '<br/>';
                    }
                ?>
            <h4>3. Fungsi array_push($array)</h4>
                <?php
                    $team = ["Husnul","Farhan","Ibrahim","Hanif"];
                    array_push($team, "Dewi");
                    foreach($team as $person){
                        echo $person. '<br/>';
                    }   
                ?>
            <h4>4. Fungsi array_shift($array)</h4>
                <?php
                    $team = ["Husnul","Farhan","Ibrahim","Hanif"];
                    array_shift($team);
                    foreach($team as $person){
                        echo $person. '<br/>';
                    }   
                ?>
            <h4>5. Fungsi array_unshift($array)</h4>
                <?php
                    $team = ["Husnul","Farhan","Ibrahim","Hanif"];
                    array_unshift($team, "Dewi","Ratna");
                    foreach($team as $person){
                        echo $person. '<br/>';
                    }   
                ?>
</body>
</html>