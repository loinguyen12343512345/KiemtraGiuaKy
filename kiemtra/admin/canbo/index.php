<?php
require_once("../../db/dbhelper.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>CATEGORY-MANAGE</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #566787;
    background: #f7f5f2;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
  	min-width: 1000px;
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    color: #fff;
    background: #40b2cd;		
    padding: 16px 25px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.search-box {
    position: relative;
    float: right;
}
.search-box .input-group {
    min-width: 300px;
    position: absolute;
    right: 0;
}
.search-box .input-group-addon, .search-box input {
    border-color: #ddd;
    border-radius: 0;
}	
.search-box input {
    height: 34px;
    padding-right: 35px;
    background: #f4fcfd;
    border: none;
    border-radius: 2px !important;
}
.search-box input:focus {
    background: #fff;
}
.search-box input::placeholder {
    font-style: italic;
}
.search-box .input-group-addon {
    min-width: 35px;
    border: none;
    background: transparent;
    position: absolute;
    right: 0;
    z-index: 9;
    padding: 6px 0;
}
.search-box i {
    color: #a0a5b1;
    font-size: 19px;
    position: relative;
    top: 2px;
}

.add button{
    text-align: center;
    width:8rem ;
    display: block;
    height: 2.5rem;
    
    color: white;
    border-radius: 15px;
    background-color: #00FF00;
    border: none;
} 
</style>
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
    <div class="container text-center" style="margin-top: 3rem">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link " href="../phongkhoa/index.php">Đơn vị Công tác</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Cán Bộ</a>
      </li>
      
    </ul>
    </div>
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">			
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                        <form action="">
                                            <div class="row">
                                            
                                            <select name="id_phongkhoa" value="<?=$pk?>" class="form-control" style="font-size: 15px;border-radius: 20px; width: 20rem;  ">
                                                    <option value="none" selected>Chọn Phòng/Khoa bạn muốn tìm</option>
                                                    <option> <?php 
                                                        $sql = "select * from phongkhoa " ;
                                                        $var =  executeResult($sql);
                                                        foreach ($var as  $value) { ?>
                                                                
                                                        <option value="<?=$value['id']?>"  <?php if( isset($_GET['id_phongkhoa']) && $_GET['id_phongkhoa'] ==$value['id']) echo "selected"?>   ><?=$value['ten']?></option>

                                                <?php } ?>
                                                    </option>
                                            </select>
                                            <button style=" margin-left: 1rem;border-color: lightblue; height: 2.2rem; width: 2.2rem; background-color: lightblue;"><i class="fa fa-search"></i></button>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="search-box">
                                <div class="input-group">								
                                    <input type="text" id="search" class="form-control" placeholder="Search">
                                    <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
              <div class="add col-md-12">
                    <a href="add.php"><button >Thêm</button></a>
              </div>
                <table class="table table-bordered table-hover" style="margin-top: 1rem;">
   
                    <thead >
                        <tr>
                            <th width="50px">id</th>
                            <th>Tên GV</th>
                            <th>Ảnh</th>
                            <th>Đơn vị</th>
                            <th>Chức Vụ</th>
                            <th>Số Điện thoại</th> 
                            <th>Email</th>                  
                            <th width="50px"></th>
                            <th width="50px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Lay danh sach taikhoan tu db
                        //Lay danh sach tai khoan tu database
                        $id = "";
                        $wh = "";

                        if (isset($_GET['id_phongkhoa'])) {
                            $id = $_GET['id_phongkhoa'];
                            if ($id =='none') {
                                $wh = '';
                            }else{
                                $id = "=".$_GET['id_phongkhoa'];
                                $wh = 'where id_phongkhoa' .$id;
                            }
                        }
                        //Lay danh sach canbo tu database
                        $sql          = 'select * from canbo '.$wh;
                        
                        $canboList    = executeResult($sql);

                        $index = 1;
                        foreach ($canboList as $item) {

                        $phongkhoa = "select ten from phongkhoa where id = " .$item['id_phongkhoa'];
                            $val_phongkhoa = executeSingleResult($phongkhoa);
                            if ($val_phongkhoa != null) {
                                    $item_phongkhoa = $val_phongkhoa['ten'];
                            }
                            echo '<tr>
                                        <td>'.($index++).'</td>
                                        <td>'.$item['ten'].'</td>
                                        <td><img src="'.$item['image'].'" style="max-width: 100px"/></td>
                                        <td>'.$item_phongkhoa.'</td>
                                        <td>'.$item['chucvu'].'</td>
                                        <td>'.$item['sdt'].'</td>
                                        <td>'.$item['email'].'</td>
                                        <td>
                                            <a href="add.php?id='.$item['id'].'"><button class="btn btn-warning">Sửa</button></a>

                                        </td>
                                        <td>
                                            <button class="btn btn-danger" onclick="deletecb('.$item['id'].')">Xoá</button>
                                        </td>
                                    </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>        
    </div>
    <script type="text/javascript">
        function deletecb(id) {
            var option = confirm('Bạn có chắc chắn muốn xoá danh mục này không?')
            if(!option) {
                return;
            }

            console.log(id)
            //ajax - lenh post
            $.post('delete.php', {
                'id': id,
                'action': 'delete'
            }, function(data) {
                location.reload()
            })
        }
    </script>     
</body>
</html>