<?php
include('koneksi.php');

$query = $koneksi->query("select * from user")->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Documentv2</title>
</head>
<body>
<h1>Table Database</h1>
<table>
    <thead>
        <th>id</th>
        <th>username</th>
        <th>password</th>
        <th>role</th>
    </thead>
    <tbody>
        <?php
            foreach ($query as $querys){
                echo "<tr>";
                echo "<td>";
                    echo $querys["id"];
                echo "</td>";
                echo "<td>";
                    echo $querys["username"];
                echo "</td>";
                echo "<td>";
                    echo $querys["password"];
                echo "</td>";
                echo "<td>";
                    echo $querys["role"];
                echo "</td>";
                echo "</tr>";
            };
        ?>
    </tbody>
</table>
<a href="tambah.php">Input Data</a>
<a href="edit.php">Change Data</a>
</body>
</html>












































//session_start();

//if(!isset($_SESSION["username"])){
 //   header("Location:from.php");
//}
//echo "<br>";
//echo "<a href='session.php'>kembali</a>";
//

//<!DOCTYPE html>
//<html lang="en">
//<head>
 //   <meta charset="UTF-8">
  //  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  // <meta name="viewport" content="width=device-width, initial-scale=1.0">
   //<title>Document</title>/
//</head>
//<body>
  //  <h1 style="text-align:center;">Ini Beranda</h1>
//</body>
//</html>