<?php
	include('menu.php');
	
  require_once('db/dbhelper.php');
  $wh = ""; 
?>
<div style="text-align: center; margin-top: 3rem;">
	<h4>Danh Sách Giảng Viên ĐHTL</h4>
</div>
<div id="panel">
	<div class="panel panel-primary">
		<div class="panel-body" style="margin-top: 3rem;">
		<div class="row">
		<div class="loc col-md-6">
			
				<div class="form-group">

									<form action="">
									<div class="row">
		              <select name="inputState" class="form-control" style="font-size: 15px;border-radius: 20px;   margin-left: 7rem; width: 25rem; ">
		                                            <option value="none" selected>Chọn Khoa bạn muốn tìm</option>
		                                            <option> <?php 
                                                        $sql = "select * from phongkhoa " ;
                                                        $var =  executeResult($sql);
                                                        foreach ($var as  $value) { ?>
                                                                
                                                        <option value="<?=$value['id']?>"  <?php if( isset($_GET['id_phongkhoa']) && $_GET['id_phongkhoa'] ==$value['id']) echo "selected"?>   ><?=$value['ten']?></option>

                                                <?php } ?>
                                                    </option>
		              </select>
		              <button style="margin-left: 1rem; border-color: lightblue; height: 2.3rem; width: 2.3rem; background-color: lightblue;"><i class="fa fa-search"></i></button>
		              </div>
		            </form>
		        </div>
				
			
		</div>

		<div class="col-md-5" >
			 
                            <div class="search-box">
                                <div class="input-group" style="border-radius: 20px;">								
                                    <input type="text" id="search" class="form-control" placeholder="Search">
                                    <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                                </div>
                            </div>
                        
		</div>
		</div>
	</div>
	</div>
</div>

<div id="content2">
	<?php 

		if (isset($_GET['inputState'])) {
                            $id = $_GET['inputState'];
                            if ($id =='none') {
                                $wh = '';
                            }else{
                                $id = "=".$_GET['inputState'];
                                $wh = 'where id_phongkhoa ' .$id;
                            }
                        }

  $sql= "select * from canbo ".$wh."";
  
  $datas = executeResult($sql);


 ?>
	<div class="acb container">
		<div class="acbd row" style="margin-top: 3rem">
			<?php foreach ($datas as $row) {?>
          <div class="col-md-4">
            <figure class="card card-product">
              
              <div class="img-wrap"><a href="gvinfo.php?id=<?php echo $row['id'] ?>"><img style="height: 400px; width: 100%;" src="<?php echo $row['image']; ?>" ></a></div>
              <figcaption class="info-wrap" style="margin-top:0.5rem">
                <h4 class="title" style="text-align: center;"><a href="gvinfo.php?id=<?php echo $row['id'] ?>" style="text-decoration: none;color: black;"><?php echo $row['ten']; ?></a></h4>
                <h5 style="text-align: center;"><?php echo $row['chucvu']; ?></h5>                
              </figcaption>
              
              
            </figure>
          </div> <!-- col // -->
        <?php }?>
        
          

      </div>
	</div>
</div>
//js search
<script>
			$(document).ready(function(){
				// Activate tooltips
				$('[data-toggle="tooltip"]').tooltip();
			    
				// Filter table rows based on searched term
			    $("#search").on("keyup", function() {
			        var term = $(this).val().toLowerCase();
			        $("figure figcaption").each(function(){
			            $row = $(this);
			            var name = $row.find("h4").text().toLowerCase();
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
<?php
	include('footer.php')
?>