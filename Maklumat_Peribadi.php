 <?php include "header.php"; ?>
<?php include_once 'model/config/mysqli_connect.php'; 
				    $conn =(new mysqli_connect())->createConnection();
					 ?>
					  
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body id = "Maklumat_Peribadi">
 <?php include_once 'Navigation_Bar.php'; ?>
<div class="container padding-top-8 padding-left-8 col-sm-10 ">
   <div class="panel panel-default">
       <div class="panel-heading"><p class="text-center"><strong>Maklumat Peribadi</strong> </p>
       </div>
       <form action ="FormController.php" method="post" class="form-horizontal">
	     <div class="form-group ">
		 </div>
        <div class="form-group ">
            <label for="username" class="control-label col-sm-2 ">Nama Penuh : </label>
                  <div class="col-sm-6">
                     <input type="text" class="form-control input-sm" id="username" placeholder="Username" name="fullname"/>
                 </div>
              </div>
     
        <div class="form-group required">     
                  <label for="password" class="control-label col-sm-2">No Kad Pengenalan :</label>
                     <div class="col-sm-4">
                        <input type="text" class="form-control input-sm" id="Kad_Pengenalan" placeholder="No Kad Pengenalan" name="Kad_Pengenalan"/>
                     </div>
        </div>
				
	    <div class="form-group">
                 <label for="no_tel" class="control-label col-sm-2">No Telefon :</label>
                   <div class="col-sm-4">
                     <input type="text" class="form-control input-sm" id="No_Telefon" placeholder=""/>
                   </div>
        </div><div class="form-group">
                 <label for="no_tel_bimbit" class="control-label col-sm-2">No Telefon Bimbit :</label>
                   <div class="col-sm-4">
                     <input type="text" class="form-control input-sm" name="no_tel_bimbit" placeholder="cth:012345678"/>
                   </div>
        </div>
		<div class="form-group">
                  <label for="bangsa" class="control-label col-sm-2">Bangsa :</label>
						<div class="col-sm-2">
                              <select class="form-control" id="bangsa" placeholder="--pilih bangsa">
							  <option>Melayu</option>
							  <option>Cina</option>
							  <option>India</option>
							  <option>Bumiputera</option>
							  </select>
                        </div>
		</div>
     <div class="form-group">
                  <label for="Jantina" class="control-label col-sm-2">Jantina :</label>
						<div class="col-sm-2">
                              <select class="form-control" id="Jantina">
							  <option>Lelaki</option>
							  <option>Perempuan</option>
							  </select>
                        </div>
		</div>	  
    <div class="form-group">
                  <label for="Agama" class="control-label col-sm-2">Agama :</label>
						<div class="col-sm-2">
                              <select class="form-control" id="Agama">
							  <option>Islam</option>
							  <option>Budha</option>
							  <option>Kristian</option>
							  <option>Lain-Lain</option>
							  </select>
                        </div>
		</div>
       <div class="form-group">
                  <label for="Tarikh_lahir" class="control-label col-sm-2">Tarikh lahir:</label>
						<div class="col-sm-2">
                        <input type="text" class="form-control input-sm" name="Tarikh_lahir" placeholder="">      
                        </div>
		</div>	   		 
        <div class="form-group">     
               <label for="address" class="control-label col-sm-2">Alamat Surat-Menyurat :</label>
                  <div class="col-sm-8">
                       <input type="text" class="form-control input-sm" name="address" placeholder="Alamat rumah"/>
                  
				</div>   
		</div>	  
         <div class="form-group">  
		 <label for="sel1" class="control-label col-sm-2">Negeri :</label>
                   <div class="col-sm-2">
				   
				      <select class="form-control" id="sel1">
					       <?php	$sql = "SELECT Negeri FROM Negeri";
									$result1 = mysqli_query($conn,$sql);
										while($row1 = mysqli_fetch_array($result1)):; ?>
					  <option> <?php echo($row1[0]) ?> </option>
							<?php endwhile; ?>
					  </select>
					</div>
				 <label for="Region" class="control-label col-sm-2">Bandar :</label>
                    <div class="col-sm-2">
				   <input type="text" class="form-control input-sm" name="Region" placeholder="Bandar"/>
                  </div>
				  </div>
         <div class="form-group">               
                 <label for="Zipcode" class="control-label col-sm-2">Poskod :</label>
                   <div class="col-sm-2">
				       <input type="text" class="form-control input-sm" name="Zipcode" placeholder="Poskod (cth:34300)"/>
                   </div>
                </div>
             <div class="col-sm-offset-10 ">
                     <button type="submit" class="btn btn-default " name="register">Sah dan Hantar</button>  
			</div>
                </div>
                
                
            </form>   
           </div>
      </div>
	  <script src = "src/bootstrap.js"> </script>
	  <script src = "src/jquery-3.1.1.min.js"> </script>
	  <script src = "src/jquery.tooltip.js"> </script>
<script src = "myscript.js"> </script>
<script type="text/javascript">
$(document).ready(function() {
	$('#tfrb').tooltip();
	$('#jy').tooltip();
});
</body>
