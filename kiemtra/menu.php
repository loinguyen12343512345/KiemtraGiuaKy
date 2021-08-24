<!DOCTYPE html>
<html>
  <head>
    
    <meta charset="UTF-8">
    <title>TLU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="style123.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel='shortcut icon' href='/Data/Sites/1/skins/default/favicon.ico' />

	<script>
			$(document).ready(function(){
				// Activate tooltips
				$('[data-toggle="tooltip"]').tooltip();
			    
				// Filter table rows based on searched term
			    $("#search").on("keyup", function() {
			        var term = $(this).val().toLowerCase();
			        $("table tbody tr").each(function(){
			            $row = $(this);
			            var name = $row.find("td:nth-child(2)").text().toLowerCase();
			            console.log(name);
			            if(name.search(term) < 0){                
			                $row.hide();
			            } else{
			                $row.show();
			            }
			        });
			    });
			});
			</script>
  </head>
  <body>
    <!--nav đầu-->
    <div style="background-color: blue; height:10px"></div>
    <nav class="navbar  bg-white justify-content-between">

        <div class= " container">
            <a class="navbar-brand" href="#" >
                <img src="./img/logo.png" alt="" style="height: 90px;"> 
            </a>
            <div  style="float:right;"> 
                            <div class="search-box">
                                <div class="input-group">								
                                    <input type="text" id="search" class="form-control" placeholder="Search">
                                    <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                                </div>
                            </div>
         </div>
           	
   
            
		</div>
    </nav>
<!--nav dưới-->
      <div id="menu">
      <div class="banner">
      <div class="container">
      <nav class="navbar  navbar-expand-xl  text-center stiky-top">
      
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentXL" aria-controls="navbarSupportedContentXL" aria-expanded="false" aria-label="Toggle navigation"style="color: lightgray;" >
              <span class="navbar-toggler-icon" style="color: lightgray;"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContentXL">
              
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <a class="nav-link " href="index.php"><i class="fa fa-home"></i><span class="sr-only">(current)</span></a>
                  </li>

                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="" id="navbarDropdownXL" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          GIỚI THIỆU
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownXL">
                          <a class="dropdown-item" href="">TỔNG QUAN</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">SỨ MẠNG - TẦM NHÌN</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">CƠ CẤU TỔ CHỨC VÀ NHÂN LỰC </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">CƠ SỞ VẬT CHẤT</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">CÔNG TÁC ĐẢNG</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">CÔNG TÁC ĐOÀN</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle " href="codong.php" id="navbarDropdownXL" id="navbarDropdownXL" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       TUYỂN SINH 
                      </a>
                      <div class="dropdown-menu"  aria-labelledby="navbarDropdownXL" >
                          <a class="dropdown-item" href="">TUYỂN SINH ĐẠI HỌC</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">TUYỂN SINH THẠC SĨ</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">TUYỂN SINH TIẾN SĨ</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">VỪA HỌC VỪA LÀM</a>
                          
                      </div>
                  </li>

                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="codong.php" id="navbarDropdownXL" id="navbarDropdownXL" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       ĐÀO TẠO  
                      </a>
                      <div class="dropdown-menu"  aria-labelledby="navbarDropdownXL" >
                          <a class="dropdown-item" href="">THẠC SĨ</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">ĐẠI HỌC CHÍNH QUY</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">CAM KẾT CHẤT LƯỢNG</a>
                          
                      </div>
                  </li>

                  <li class="nav-item active">
                      <a class="nav-link " href="gv.php">GIẢNG VIÊN<span class="sr-only">(current)</span></a>
                  </li>

              </ul>


          </div>
          <?php 

           
            if (!isset($_SESSION["username"]))
            {
              echo "
               <button onclick='document.getElementById('id01').style.display='block'' id='ember363' class='ember-view btn btn-sm btn-success'><a href='./login/index.php' style='text-decoration:none ;color: white'> Đăng nhập </a></button>
                
                "
                ;

            }
            else
            {
              echo "
                <a href='#' class='btn btn-success' title='Thông tin tài khoản' style='background:lightblue;'>Xin Chào ".$_SESSION["username"]."</a>
                <a href='logout.php' title='Đăng xuất' ><img src='./img/logging-out-2355227_960_720.png' style='margin:auto; width:35px ; height:35px'></a>";
            }
          ?>
          
      </nav>


      </div>
    </div>
      </div>