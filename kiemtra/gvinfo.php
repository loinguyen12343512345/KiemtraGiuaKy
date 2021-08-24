<?php
	include('menu.php');
	require_once ('db/dbhelper.php');	
	
	
	

?>
 <div class ="chitiet" style="margin-top: 3rem; margin-bottom: 3rem;">
 	 
 	<div class="container">
 	<?php 
 	if (isset($_GET['id'])) {
	$id      = $_GET['id'];}
      $sql =  " select * from canbo where id =".$_GET['id']." ";

      $directory =  executeSingleResult($sql) ;
      if($directory != null) {
        
      $ten = $directory['ten'];
      $image = $directory['image'];
      $chucvu = $directory['chucvu'];
      
      $email = $directory['email'];
      $sdt = $directory['sdt'];
      
	  $id_phongkhoa = $directory['id_phongkhoa'];

	  $sqlpk = "select ten from phongkhoa where id = " .$id_phongkhoa;
	  $id_phongkhoa = executeSingleResult($sqlpk) ;
	  if ($id_phongkhoa!= null) {
	  		$pk = $id_phongkhoa['ten'];
	  }


      }  ?>
 	<div class="row">
	 	<div class="col-xs-12 col-md-6">
	 		<img src="<?=$image?>" style="height: 500px; width: 400px;" >
	 	</div>
	 	<div class="content3 col-xs-12 col-md-6" style="margin-top: 1rem">
	 		<div class="container">
	 			<h4><strong>Họ Và Tên: </strong><?=$ten?></h4>
	 			<h4><strong>Chức Vụ: </strong><?=$chucvu?></h4>
	 			<h4><strong>Email: </strong><?=$email?></h4>
	 			<h4><strong>Di Động: </strong><?=$sdt?></h4>
	 			<h4><strong>Đơn Vị: </strong><?=$pk?></h4>
	 			
	 		</div>

	 	</div>
	 </div>
	</div>
 </div>


<?php
	include('footer.php')
?>