<?php
require_once ('../../db/dbhelper.php');

$id = $ten = $sophong = $diachi = $email = $id_parent ='';
if (!empty($_POST)) {
	if (isset($_POST['ten'])) {
		$ten = $_POST['ten'];
		$ten = str_replace('"', '\\"', $ten);
	}
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
	}
	
	if (isset($_POST['sophong'])) {
		$sophong = $_POST['sophong'];
		$sophong = str_replace('"', '\\"', $sophong);
	}
	if (isset($_POST['diachi'])) {
		$diachi = $_POST['diachi'];
		$diachi = str_replace('"', '\\"', $diachi);
	}
	if (isset($_POST['email'])) {
		$email = $_POST['email'];
		$email = str_replace('"', '\\"', $email);
	}
	if (isset($_POST['id_parent'])) {
		$id_parent = $_POST['id_parent'];
		$id_parent = str_replace('"', '\\"', $id_parent);
	}

	if (!empty($ten)) {
		
		//Luu vao database
		if ($id == '') {
			$sql = 'insert into phongkhoa(ten, sophong, diachi, email) values ("'.$ten.'", "'.$sophong.'",  "'.$diachi.'", "'.$email.'")';
		} else {
			$sql = 'update phongkhoa set ten = "'.$ten.'", sophong = "'.$sophong.'", diachi = "'.$diachi.'", email = "'.$email.'"  where id = '.$id;
		}

		execute($sql);
		// 
		header('Location: index.php');
		die();
	}
}

if (isset($_GET['id'])) {
	$id     	 = $_GET['id'];
	$sql     	 = 'select * from phongkhoa where id = '.$id;
	$phongkhoa 	 = executeSingleResult($sql);
	if ($phongkhoa != null) {
		$ten       = $phongkhoa['ten'];
		
		$sophong   = $phongkhoa['sophong'];
		$id_parent = $phongkhoa['id_parent'];
		$diachi    = $phongkhoa['diachi'];
		$email     = $phongkhoa['email'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add/Fix Category</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- summernote -->
	<!-- include summernote css/js -->
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>
	  <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Phòng Khoa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../canbo/index.php">Cán Bộ</a>
      </li>
      
    </ul>


		<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm/Sửa Phòng Khoa</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					
					<div class="form-group">
					  <label for="ten">Tên Phòng/Khoa:</label>
					  <input type="text" name="id" value="<?=$id?>" hidden="true">
					  <input required="true" type="text" class="form-control" id="ten" name="ten" value="<?=$ten?>">
					</div>

					<div class="form-group">
					  <label for="sophong">Phòng:</label>
					  <input type="text" name="id" value="<?=$id?>" hidden="true">
					  <input required="true" type="text" class="form-control" id="sophong" name="sophong" value="<?=$sophong?>">
					</div>

					<div class="form-group">
					  <label for="email">Email:</label>
					  <input type="text" name="id" value="<?=$id?>" hidden="true">
					  <input required="true" type="text" class="form-control" id="email" name="email" value="<?=$email?>">
					</div>

					<div class="form-group">
					  <label for="diachi">Địa chỉ:</label>
					  <input type="text" name="id" value="<?=$id?>" hidden="true">
					  <input required="true" type="text" class="form-control" id="diachi" name="diachi" value="<?=$diachi?>">
					</div>
					
					
					<button class="btn btn-success">Lưu</button>
				</form>
			</div>
		</div>
	</div>

	
</body>
</html>