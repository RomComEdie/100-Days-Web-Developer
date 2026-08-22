<?php

// *pengulangan
// *perkondisian

// Pengulangan
// For
// while
// do while
// foreach : pengulangan khusus array

// Perkondisian
// if else
// if else if else
// ternary
// switch

// For

// for ( $i = 0; $i < 5; $i++ ) {
//     echo "Shenhe <br> " ;
// }

// While

// $i = 0;
// while ( $i < 5 ) {
// echo "yae miko <br>";
// $i += 1 ;
// }

// do while
// $i = 0;
// do {
//  echo "Changli <br>";
//  $i++;
// } while ( $i < 5 ); 
















?>

<!-- Latihan Tabel-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris {
            background-color: antiquewhite;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">

        <!-- Cara pertama -->

        <!-- <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
            <td>1,5</td>
        </tr>
        <tr>
            <td>2,1</td>
            <td>2,2</td>
            <td>2,3</td>
            <td>2,4</td>
            <td>2,5</td>
        </tr> -->


        <!-- Cara kedua -->
        <?php
        // for ( $i = 1; $i <= 3; $i++ ) {
        //     echo "<tr>";
        //     for( $x = 1; $x <= 5; $x++ ) {
        //         echo "<td>$i,$j</td>";
        //     }
        //     echo "/<tr>";
        // }
        ?>
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ( $i % 2 == 1) : ?>
            <tr class="warna-baris">
                <?php else : ?>
                <tr>
                <?php endif ?>
                <?php for ($x = 1; $x <= 5; $x++) : ?>
                    <td><?= "$i,$x"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>