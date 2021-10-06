<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css.css">
</head>
<body>

<?php


if(isset($_POST['hitung'])){
    $asp1 = $_POST['asp1'];
    $asp2 = $_POST['asp2'];
    $asp3 = $_POST['asp3'];
    $asp4 = $_POST['asp4'];
    $asp5 = $_POST['asp5'];
    $asp6 = $_POST['asp6'];
    $asp7 = $_POST['asp7'];
    $asp8 = $_POST['asp8'];
    $asp9 = $_POST['asp9'];
    $asp10 = $_POST['asp10'];
    $asp10 = $_POST['asp10'];    

    switch ($asp1) {
        case 'tiap_hari':
            $hsl1 = 10;
        break;

        case '3_5_hari':
            $hsl1 = 5;
        break;

        case 'jarang':
            $hsl1 = 3;
        break;

        case 'ketika_butuh':
            $hsl1 = 1;
    }

    switch ($asp2) {
        case 'inisiatif':
            $hsl2 = 10;
        break;

        case 'saat_disuruh':
            $hsl2 = 4;
        break;

        case 'Tidak':
            $hsl2 = 1;
    }

    switch ($asp3) {
        case 'y3':
            $hsl3 = 10;
        break;

        case 'tdk3':
            $hsl3 = 2;
    }

    switch ($asp4) {
        case 'y4':
            $hsl4 = 10;
        break;
        
        case 'tdk4':
            $hsl4 = 2;
        }

    switch ($asp5) {
        case 'y5':
            $hsl5 = 10;
        break;

        case 'tdk5':
            $hsl5 = 1;
    }

    switch ($asp6) {
        case 'y6':
            $hsl6 = 10;
        break;

        case 'tdk6':
            $hsl6 = 2;
    }

    switch ($asp7) {
        case 'y7':
            $hsl7 = 10;
        break;

        case 'tdk7':
            $hsl7 = 4;
    }

    switch ($asp8) {
        case 'y8':
            $hsl8 = 10;
        break;

        case 'tdk8':
            $hsl8 = 3;
    }

    switch ($asp9) {
        case 'y9':
            $hsl9 = 10;
        break;

        case 'tdk9':
            $hsl9 = 1;
    }

    switch ($asp10) {
        case 'y10':
            $hsl10 = 5;
        break;

        case 'tdk10':
            $hsl10 = 10;
    }
    
    
    $hasil = $hsl1 + $hsl2 + $hsl3 + $hsl4 +  $hsl5 + $hsl6 + $hsl7 + $hsl8 + $hsl9 + $hsl10;

}



?>
<div class="form">
  <form method="post" action="lovemeter.php">
    <h2>Meenghitung Perasaan dia kepadamu</h2>
    <h5 class="red">0-25 = dia tidak menyukaimu</h5>
    <h5 class="orange">26-50 = dia mengagumi/mengenalmu lebih jauh</h5>
    <h5 class="yellow">51-75 = dia ingin memilikimu</h5>
    <h5 class="green">76-100 = dia mencintaimu</h5>
<?php if(isset($_POST['hitung'])){ ?>
    <h3> Skor Anda <?php echo $hasil; ?> </h3>
<?php } ?>
<div class="kiri">
    <h3>Rasio Chattingan</h3><select name="asp1" class="opt">
		<option value="tiap_hari">Setiap Hari</option>
		<option value="3_5_hari">3-5 Hari</option>
        <option value="jarang">Jarang</option>
		<option value="ketika_butuh">Ketika Membutuhkan saja</option>			
	</select>
    <h3>kirim pap</h3><select name="asp2" class="opt">
		<option value="inisiatif">Inisiatif sendiri</option>
		<option value="saat_disuruh">Saat Disuruh</option>
        <option value="Tidak">Tidak</option>			
	</select>
    <h3>selalu ngabarin</h3><select name="asp3" class="opt">
		<option value="y3">iya</option>
		<option value="tdk3">Tidak</option>				
	</select>
    <h3>suka bales story</h3><select name="asp4" class="opt">
		<option value="y4">iya</option>
		<option value="tdk4">Tidak</option>				
	</select>
    <h3>Selalu memberikan Semangat</h3><select name="asp5" class="opt">
		<option value="y5">iya</option>
		<option value="tdk5">Tidak</option>
        </select>
</div>			
<div  class="kanan">	
    <h3>tampak cuek tapi peduli</h3><select name="asp6" class="opt">
		<option value="y6">iya</option>
		<option value="tdk6">Tidak</option>				
	</select>
    <h3>rencanain hangout bersama</h3><select name="asp7" class="opt">
		<option value="y7">iya</option>
		<option value="tdk7">Tidak</option>				
	</select>
    <h3>suka ngajak selfie</h3><select name="asp8" class="opt">
		<option value="y8">iya</option>
		<option value="tdk8">Tidak</option>				
	</select>
    <h3>nunjukin kesukaan/hobinya</h3><select name="asp9" class="opt">
		<option value="y9">iya</option>
		<option value="tdk9">Tidak</option>				
	</select>
    <h3>membahas hal vulgar</h3><select name="asp10" class="opt">
		<option value="y10">iya</option>
		<option value="tdk10">Tidak</option>				
	</select>
    </div>

    <input type="submit" class="submit" name="hitung" value="Hitung">

    </div>
</body>
</html>