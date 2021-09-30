<?php 
include "incl/connect.inc.php" ;


$query = mysqli_query($connect, "Select * FROM tb_pesan");
while($data = mysqli_fetch_array($query)){
$id_pesan = $data['id_pesan'];
$no_pesan = $data['no_pesan'];
$tgl_pesan = date("j/n/Y | H:i",$data['tgl_pesan']);
$nama = $data['nama'];
$email=$data['email'];
$phone = $data['phone'];
$kota=$data['kota'];
$alamat = $data['alamat'];
$tgl_cekin = date("j/n/Y",$data['tgl_cekin']);
$tgl_cekout = date("j/n/Y",$data['tgl_cekout']);
$id_tipe=$data['id_tipe'];

}
?>
<?php 

$query = mysqli_query($connect, "Select * FROM tb_kamar");
while($data = mysqli_fetch_array($query)){
$nm_kamar = $data['nm_kamar'];
}

?>
<?php
require __DIR__.'/html2pdf/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf('P','A4','fr', true, 'UTF-8', array(15, 15, 15, 15), false); 
$cetak = "
</html>
<head>
  <title></title>
</head>
<body>
   <h1>GADJAH MADA HOMESTAY </h1> 
   <h4>Berikut Adalah Isi Data Pemesanan Anda :</h4> <br>
          Tanggal Pesan : <b>$tgl_pesan<br /></b><br>
          Nomor Pesan : <b>$no_pesan<br /></b><br>
          Nama : <b>$nama<br /></b><br>
          Email : <b>$email<br /></b><br>
          Phone : <b>$phone<br /></b><br>
          Kota : <b>$kota<br /></b><br>
          Tanggal Check In : <b>$tgl_cekin<br /></b><br>
          Tanggal Check Out : <b>$tgl_cekout<br /></b><br>
          Nomor Kamar : <b>$nm_kamar<br /></b>
</body>
</html>
";
          
          
         
         
$html2pdf->writeHTML($cetak);
$html2pdf->output();  //manual download
// $html2pdf->output("Bukti pesanan-Homestay.pdf","D"); //auto download
// $html2pdf->output(__DIR__."/contoh_laporan.pdf","F"); //download di direktori folder
?>







