<?php
require_once ('../../db/dbhelper.php');

$id = $ten = $image = $chucvu  = $email = $sdt  = $id_phongkhoa ='';
if (!empty($_POST)) {
	if (isset($_POST['ten'])) {
		$ten = $_POST['ten'];
		$ten = str_replace('"', '\\"', $ten);
	}
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
	}
	
	if (isset($_POST['image'])) {
		$image = $_POST['image'];
		$image = str_replace('"', '\\"', $image);
	}
	if (isset($_POST['chucvu'])) {
		$chucvu = $_POST['chucvu'];
		$chucvu = str_replace('"', '\\"', $chucvu);
	}
	if (isset($_POST['email'])) {
		$email = $_POST['email'];
		$email = str_replace('"', '\\"', $email);
	}
	
	if (isset($_POST['sdt'])) {
		$sdt = $_POST['sdt'];
		$sdt = str_replace('"', '\\"', $sdt);
	}
	if (isset($_POST['id_phongkhoa'])) {
		$id_phongkhoa = $_POST['id_phongkhoa'];
		$id_phongkhoa = str_replace('"', '\\"', $id_phongkhoa);
	}

	if (!empty($ten)) {
			if ($id == '') {
				
			$sql = 'insert into canbo(ten, image, chucvu, email, sdt ,id_phongkhoa) values("'.$ten.'","'.$image.'", "'.$chucvu.'", "'.$email.'", "'.$sdt.'", "'.$id_phongkhoa.'" )';
					
				
			}
			 else {
			$sql = 'update canbo set ten = "'.$ten.'", image = "'.$image.'", chucvu = "'.$chucvu.'", email = "'.$email.'", sdt = "'.$sdt.'", id_phongkhoa = "'.$id_phongkhoa.'" where id = '.$id;}
			execute($sql);
				// print($sql);
				// exit();
			header('Location: index.php');
			die();
			

			
		}
}

if (isset($_GET['id'])) {
	$id      = $_GET['id'];
	$sql     = 'select * from canbo where id = '.$id;
	$cb 	 = executeSingleResult($sql);
	if ($cb != null) {
		$ten       = $cb['ten'];
		
		$image 	 	 	  = $cb['image'];
		
		
		$chucvu       = $cb['chucvu'];
		$email    	  = $cb['email'];
		$sdt     		  = $cb['sdt'];
		$id_phongkhoa = $cb['id_phongkhoa'];
		
		
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add/Fix Product</title>
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
        <a class="nav-link " href="../phongkhoa/index.php">Phòng Khoa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active " href="index.php">Cán Bộ</a>
      </li>
     </ul>

		<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm/Sửa Phòng Khoa</h2>
			</div>
			<div class="panel-body" >
				<form method="post" >
					<div class="form-group">
					  <label  for="ten">Tên GV:</label>
					  <input type="text" name="id" value="<?=$id?>" hidden="true">

					  <input  required="true" type="text" class="form-control" id="ten" name="ten" 
					  value="<?=$ten?>" >

					</div>

					<div class="form-group">
					  <label  for="chucvu">Chức Vụ:</label>
					  
					  <input  required="true" type="text" class="form-control" id="chucvu" name="chucvu" value="<?=$chucvu?>" >
					</div>
					
					<div class="form-group">
					  <label  for="email">Email:</label>
					  
					  <input  required="true" type="text" class="form-control" id="email" name="email" value="<?=$email?>" >
					</div>
					<div class="form-group">
					  <label  for="sdt">Số điện thoại</label>
					  
					  <input  required="true" type="text" class="form-control" id="sdt" name="sdt" value="<?=$sdt?>" >
					</div>
					
					<div class="form-group">
					  <label  for="phongkhoa">Phòng/ Khoa</label>
					  
					  <select  required="true" type="text" class="form-control" id="id_phongkhoa" name="id_phongkhoa" value="<?=$pk?>" >

					  	<option >Chọn đi:</option>
					  	<?php
							$sql          = 'select * from phongkhoa';
							$cbList = executeResult($sql);

						foreach ($cbList as $item) {
							if ($item['id'] == $id_phongkhoa) {
								echo '<option selected value="'.$item['id'].'">'.$item['ten'].'</option>';
							} else {
								echo '<option value="'.$item['id'].'">'.$item['ten'].'</option>';
							}
						}
						?>

					  </select>
					</div>

					<div class="form-group">
					  <label for="image">Ảnh:</label>
					  
					  <input  placeholder="" type="text" class="form-control" id="iamge" name="image" value="<?=$image?>" onchange="updateimage()">
					  <img src="<?=$image?>" style="max-width: 200px;margin-left: 30%" id="img_image">
					</div>
			
					<button  class="btn btn-success">Lưu</button>
				</form>
			</div>
		</div>
	</div>
		<script type="text/javascript">
		function updateimage() {
			$('#img_image').attr('src', $('#image').val())
		}

		$(function() {
			//doi website load noi dung => xu ly phan js
			$('#content').summernote({
			  height: 350
			});
		})
	</script>
</body>
</html>