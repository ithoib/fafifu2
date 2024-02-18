<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FafiFu2</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>
<body>
<div id="wrapper">
  <div id="content-wrapper">
  	<div id="content">
  		<div class="container-fluid">
  			<div class="card shadow mb-4 mt-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary align-middle d-inline">Fafifu Generator</h6>
                </div>
                
                <div class="card-body">
                	<form method="post" action="">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group mb-2">
			                		<label><strong>Nama</strong></label>
			                		<textarea name="nama" class="form-control" placeholder="Masukkan nama dipisahkan baris -> [nama]" rows="3"></textarea>
			                	</div>
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-group mb-2">
			                		<label><strong>Alamat</strong></label>
			                		<textarea name="alamat" class="form-control" placeholder="Masukkan alamat dipisahkan baris -> [alamat]" rows="3"></textarea>
			                	</div>
	                		</div>
	                	</div>
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group mb-2">
			                		<label><strong>Pekerjaan</strong></label>
			                		<textarea name="pekerjaan" class="form-control" placeholder="Masukkan pekerjaan dipisahkan baris -> [pekerjaan]" rows="3"></textarea>
			                	</div>
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-group mb-2">
			                		<label><strong>Posisi</strong></label>
			                		<textarea name="posisi" class="form-control" placeholder="Masukkan posisi dipisahkan baris -> [posisi]" rows="3"></textarea>
			                	</div>
	                		</div>
	                	</div>
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group mb-2">
			                		<label><strong>Lokasi</strong></label>
			                		<textarea name="lokasi" class="form-control" placeholder="Masukkan lokasi dipisahkan baris -> [lokasi]" rows="3"></textarea>
			                	</div>
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-group mb-2">
			                		<label><strong>Template</strong></label>
			                		<textarea name="template" class="form-control" placeholder="Masukkan template" rows="3"></textarea>
			                	</div>
	                		</div>
	                	</div>
	                	<div class="row mb-2">
	                		<div class="col-md-6">
	                			<div class="form-group mb-2">
			                		<label><strong>Constant 1</strong></label>
			                		<input type="text" name="constant1" placeholder="Masukkan constant 1 -> [constant1]" class="form-control">
			                	</div>
	                		</div>
	                		<div class="col-md-6">
	                			<div class="form-group mb-2">
			                		<label><strong>Constant 2</strong></label>
			                		<input type="text" name="constant2" placeholder="Masukkan constant 2 -> [constant2]" class="form-control">
			                	</div>
	                		</div>
	                	</div>
	                	<div class="form-group mb-3">
	                		<button type="submit" class="btn btn-primary" name="gen">Generate</button>
	                	</div>
                	</form>
                	<?php 
                	if(isset($_POST['gen'])){
                		$nama 		= preg_split('/\r\n|\r|\n/',$_POST['nama']);
                		$alamat 	= preg_split('/\r\n|\r|\n/',$_POST['alamat']);
                		$pekerjaan 	= preg_split('/\r\n|\r|\n/',$_POST['pekerjaan']);
                		$posisi 	= preg_split('/\r\n|\r|\n/',$_POST['posisi']);
                		$lokasi 	= preg_split('/\r\n|\r|\n/',$_POST['lokasi']);
                		$template 	= $_POST['template'];
                		$constant1 	= $_POST['constant1'];
                		$constant2 	= $_POST['constant2'];
                		$trow 		= count($nama);
                		$txt = '';
                		for($i=0;$i<$trow;$i++){
                			$txt .= $template;
                			$txt = str_ireplace(array('[nama]','[alamat]','[pekerjaan]','[posisi]','[lokasi]','[constant1]','[constant2]'), array($nama[$i],$alamat[$i],$pekerjaan[$i],$posisi[$i],$lokasi[$i],$constant1,$constant2), $txt);
                            if($i<$trow-1){
                                $txt .= " && ";
                            }
                		}
                		echo '<div class="form-group mt-2"><textarea class="form-control" rows="10" onclick="this.select()">'.$txt.'</textarea></div>';
                	}

                	?>
                </div>
                
            </div>
  		</div>
  	</div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>