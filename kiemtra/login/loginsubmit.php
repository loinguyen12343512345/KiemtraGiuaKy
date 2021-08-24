<?php
	require_once ('../db/dbhelper.php');
	session_start();

	if (isset($_POST['submit']) && $_POST["email"] != '' && $_POST["password"] != '') 
	{

			$usrnm      = $_POST["email"];
			$password   = $_POST["password"];
			$sql		= "select * from admin where email ='$usrnm' and password='$password' " ;
			$user = 	executeSingleResult($sql);
		


			// $data = mysqli_fetch_assoc($user); 

			if($user){
				// if($_POST["username"]=="admin" && $_POST["password"] == "admin" ){	

				// 	header("Location: ../admin/user/user.php");
				// 	$_SESSION["username"] = "admin";
					

				// }
				// else{

				$_SESSION["email"] = $usrnm;
				header("Location: ../admin/phongkhoa/index.php");
				
			}
			else{
				echo "Nhập sai tên Tài Khoản hoặc Mật Khẩu";
			}

	}
	else
	{
		header("location:index.php");
	}

?>