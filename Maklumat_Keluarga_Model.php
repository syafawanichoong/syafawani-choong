<?php

include_once 'model/config/mysqli_connect.php';
class model{

    public function add($Nama_Keluarga,$Kad_Pengenalan,$Hubungan,$no_tel,$no_tel_bimbit,$Jawatan,$Sektor_Pekerjaan,$Purata_Pendapatan,
$Alamat,$Zipcode,$Negeri){
 $conn =(new mysqli_connect())->createConnection();
 echo $Nama_Keluarga;       

$sql = "INSERT INTO tblfamilydetails(Name, IC_No, Family_Status, Phone_No, Mobile_No, Occupation, 
Occupation_Sector, Average_Income, Relationship, Address, Postcode,State_Code) VALUES ('$Nama_Keluarga','$Kad_Pengenalan','$Hubungan','$no_tel','$no_tel_bimbit','$Jawatan','$Sektor_Pekerjaan','$Purata_Pendapatan','$Hubungan',
'$Alamat','$Zipcode','$Negeri')";
if ($conn->query($sql) === TRUE) {
    return "New record created successfully";
} else {
    return "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

    }
	
	}
	
	?>
	
	