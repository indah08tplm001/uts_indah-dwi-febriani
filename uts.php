<?php 
ini_set("display_errors","");
$pnegara = $_POST["pnegara"];
$jpertndingan = $_POST["jpertandingan"];
$jmenang = $_POST["jmenang"];
$jseri = $_POST["jseri"];
$jpoin = $_POST["jpoin"];
$nama = $_POST["nama"];
$nim = $_POST["nim"];
$bayar = $_POST["bayar"];
$jmlmakan = $_POST["jmlmakan"];
$jmlminum = $_POST["jmlminum"];
$tp = $_POST["tp"];
$ttt = $_POST["ttt"];
$daftarbarang = $_POST["daftarbarang"];

if ($pnegara === 'Uzbekistan U-23') {
    $jpertandingan = 3;
    $jmenang = 3 ;
    $jseri = 0 ;
    $jkalah = 0 ;
    $jpoin = 9 ;
  } elseif ($pnegara === 'Vietnam U-23') {
    $jpertandingan = 3;
    $jmenang = 2 ;
    $jseri = 0 ;
    $jkalah = 1 ;
    $jpoin = 6 ;
  } elseif ($pnegara === 'Kuwait U-23') {
    $jpertandingan = 3;
    $jmenang = 1 ;
    $jseri = 0 ;
    $jkalah = 2 ;
    $jpoin = 3 ; 
} elseif ($pnegara === 'Malaysia U-23') {
    $jpertandingan = 3;
    $jmenang = 0 ;
    $jseri = 0 ;
    $jkalah = 3 ;
    $jpoin = 0 ; 
  } else {
    echo "Pilihan tidak valid.";
  }



?>



<html>
    <head>
</head>
<body>
    <form method="post">
 
<br>
<br>      
    <br>
    <br>
    <table cellpadding = 8>
    <tr>
        <td>Nama Negara</td>
        <td><select name="pnegara">
            <option value="Uzbekistan U-23">Uzbekistan U-23</option>
            <option value="Vietnam U-23">Vietnam U-23</option>
            <option value="Kuwait U-23">Kuwait U-23</option>
            <option value="Malaysia U-23">Malaysia U-23</option>
            
        </select></td>
    </tr>
    <tr>
        <td>Jumlah Pertandingan</td>
        <td><input type = "text" name="jpertandingan" value="<?php echo isset ($_POST['jpertandingan']) ? $_POST['jpertandingan'] : '' ; ?>"></td>
    </tr>
    <tr>
        <td>Jumlah Menang</td>
        <td><input type = "text" name="jmenang" value="<?php echo isset ($_POST['jmenang']) ? $_POST['jmenang'] : '' ; ?>"></td>
    </tr>
    <tr>
        <td>Jumlah Seri</td>
        <td><input type = "text" name="jseri" value="<?php echo isset ($_POST['jseri']) ? $_POST['jseri'] : '' ; ?>"></td>
    </tr>
    <tr>
        <td>Jumlah Kalah</td>
        <td><input type = "text" name="jkalah" value="<?php echo isset ($_POST['jkalah']) ? $_POST['jkalah'] : '' ; ?>"></td>
    </tr>
    <tr>
        <td>Jumlah Poin</td>
        <td><input type = "text" name="jpoin" value="<?php echo isset ($_POST['jpoin']) ? $_POST['jpoin'] : '' ; ?>"></td>
    </tr>
    
    
    
</table>
<input type="submit" name="proses" value="PROSES" id="proses">
<br>
<br>
<center>       
<br><b> Data Group D Piala Asia Qatar U-23 <b>
<br><b> Per 17 April 2022 14:30:16 (Waktu dan Jam Sekarang) <b>
<br><b> INDAH DWI FEBRIANI/201011401029/06TPLM004  <b>
</center>
<br>
<br>      
    <br>
    <br>
<table border = 5 cellpadding = 10>
    <tr>
        <td>Negara</td>
        <td>P</td>
        <td>M</td>
        <td>S</td>
        <td>K</td>
        <td>Poin</td>
       
    </tr>
    <tr>
        <td><?php echo "$pnegara" ?></td>
        <td><?php echo "$jpertandingan" ?></td>
        <td><?php echo $jmenang ?> </td>
        <td><?php echo $jseri ?> </td>
        <td><?php echo $jkalah   ?></td>
        <td><?php echo "$jpoin" ?> </td>
        
        
    </tr>
    
    

</table>

</body>
</html>

