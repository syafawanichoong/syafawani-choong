<?php
include_once 'Maklumat_Keluarga_Model.php';
if(isset($_POST['Maklumat_Keluarga']))
{
 // variables for input data
 $Nama_Keluarga = $_POST['Nama_Keluarga'];
 $Kad_Pengenalan = $_POST['No_IC'];
 $no_tel = $_POST['no_tel'];
 $no_tel_bimbit = $_POST['no_tel_bimbit'];
 $Hubungan = $_POST['Hubungan'];
 $kecatatan = $_POST['kecatatan'];
 $Penjaga_Tunggal = $_POST['Penjaga_Tunggal'];
 $Alamat = $_POST['Alamat'];
 $Negeri = $_POST['Negeri'];
 $Zipcode = $_POST['Zipcode'];
 $Jawatan = $_POST['Jawatan'];
 $Bidang_Pekerjaan = $_POST['Bidang_Pekerjaan'];
 $Sektor_Pekerjaan = $_POST['Sektor_Pekerjaan'];
 $Purata_Pendapatan = $_POST['Purata_Pendapatan'];
 // variables for input data
 
 echo $Nama_Keluarga;
 echo $Negeri;
 echo $Sektor_Pekerjaan;
 
 (new model())->add($Nama_Keluarga,$Kad_Pengenalan,$Hubungan,$no_tel,$no_tel_bimbit,$Jawatan,$Sektor_Pekerjaan,$Purata_Pendapatan,
$Alamat,$Zipcode,$Negeri);
 
  header('Location: Maklumat_Akademik.php');
 
}
?>