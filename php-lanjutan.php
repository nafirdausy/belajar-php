<?php

// $nama = 'Nur Anisa Firdausy';


// echo "Nama saya adalah $nama";

// Perulangan for

// $no = 100;
// for ($i=0; $i<$no; $i++) {
//     $n = $i + 1;
//     echo $n.' '.$nama.'<br/>';
// }





// Perulangan while
//  $i = 0;
//  $no = 20;
//     while ($i < $no) {
//         $n = $i + 1;
//         echo $n.' '.$nama.'<br/>';
//         $i++;
//     }

//Perulangan do while

// $i = 0;
// $no = 20;
// do {
//     $n = $i + 1;
//     echo $n . '' . $nama . '<br/>';
//     $i++;
// } while ($i < $no)


// Perulangan foreach

// $data = array('Inova', 'Avanza', 'Wuling', 'Brio', 'Yaris', 'Xenia');
// $i = 0;
// // while ($i < count($data)) {
// //     echo $data[$i] . '<br>';
// //     $i++;
// // }

// // echo $data[1], '<br/>';


// foreach($data as $value) {
//     echo $value.'<br>';
// }


// PERCABANGAN

// if ($nama == "Nur Anisa Firdausy") {
//     echo $nama." Adalah nama saya";
// } else if($nama == "Aan") {
//     echo $nama." Adalah Teman Anisa";
// } else {
//     echo $nama." Salah orang?";
// }


// switch ($nama) {
//     case "Nur Anisa Firdausy":
//         $pesan = $nama . " Adalah nama saya";
//         break;
//     case "Aan":
//         $pesan = $nama . " Adalah Teman Anisa";
//         break;
//     default:
//         $pesan = $nama . " Salah orang?";
// }
// echo $pesan;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if (!empty($_POST['submit'])) {

        switch ($_POST['nama']) {
            case "Nur Anisa Firdausy":
                $pesan = $_POST['nama'] . " adalah orang Malang";
                break;
            case "Aan":
                $pesan = $_POST['nama'] . " Adalah orang Surabaya";
                break;
            default:
                $pesan = $_POST['nama'] . " darimana ya?";
        }

        for ($i = 0; $i < $_POST['no']; $i++) {
            echo $pesan . "<br>";
        }
    } else {
        echo "Silahkan isi nama dan jumlah";
    }
    ?>
</body>

</html>