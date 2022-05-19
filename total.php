<?php require_once 'header.php'; include 'connection.php';  ?>
             <script>
   $(document).ready(function() {

        $('#type').on('change', function() {

            var type = $(this).val();
            if (type) {
                $.get(
                    "ajax.php", {
                        type: type
                    },
                    function(data) {

                        $('#table').html(data);

                    });

            } else {
                $('#table').html('<option>اختر نوع البيانات اولا</option>')
            }

        });

    });

                
    </script>
<style>
    #shape:hover{
     cursor: pointer;
    }


</style>
<body onload="myfunction()">
      <div class="pl-5 pt-3 title text-center text-dark mb-3" style="background-color:#ffffff;">
    <div class=" WOW fadeIn text-right">
      <form name="login" id="login" action="" method="POST">
        <div class="row mr-3">
               <div id="typeDiv" class="mb-3 col-2">
            <label for="type" class="form-label">مستوى البيانات :</label>
            <select name="type" id="type" class="form-select  form-control" style="font-size: 15px;" onchange="datatype()">
                <option  value="الجمهورية">الجمهورية</option>
                <option value="المحافظة">المحافظة</option>
                <option value="الحى / المركز">الحى / المركز</option>
                <option value="القرية / الشياخة">القرية / الشياخة</option>
            </select>
          </div>
          <div id="gov" class="mb-3 col-2">
            <label for="gov" class="form-label">المحافظة :</label>
            <select name="governorate" id="governorate" class="form-select  form-control" style="font-size: 15px;" disabled>
              <option value="none">الكل</option>
             <?php
      
       $query= "select DISTINCT name from governorate";
       $do= mysqli_query($conn,$query)or die('error'.mysqli_error($conn));
       while($row=mysqli_fetch_array($do)){
      echo '<option value="'.$row['name'].'"  "selected">'.$row['name'].'</option>';
       }
       ?>
            </select>
          </div> 
       <div id="qismDiv" class="mb-3 col-2">
            <label for="qism" class="form-label">الحى / المركز :</label>
            <select name="qism" id="qism" class="form-select  form-control" style="font-size: 15px;" disabled>
              <option value="none">--اختر--</option>
        
            </select>
          </div> 
          
     <div id="qaryaDiv" class="mb-3 col-2">
            <label for="qarya" class="form-label">القرية / الشياخة :</label>
            <select name="qarya" id="qarya" class="form-select  form-control" style="font-size: 15px;" disabled>
              <option value="none">--اختر--</option>
        
            </select>
          </div> 
            
            
             <div id="tableDiv" class="mb-3 col-2">
            <label for="table" class="form-label">البيان :</label>
            <select name="table" id="table" class="form-select  form-control" style="font-size: 15px;" >
              <option value="none">--اختر--</option>
              <?php
      
       $query= "select * from map where type = 'الجمهورية'";
       $do= mysqli_query($conn,$query)or die('error'.mysqli_error($conn));
       while($row=mysqli_fetch_array($do)){
      echo '<option value="'.$row['id'].'"  "selected">'.$row['name'].'</option>';
       }
       ?>
            </select>
          </div> 
          </div>
         <div class="row">
              <div class="col-5"></div>
          <div class="col-4">
            <button class="btn btn-lg text-white submitButton mt-4" style="background-color:#3568c1;" type="submit" name="search">بحث</button>
               <button class="btn btn-lg text-white mt-4" type="button" name="excel" onclick="exportTableToExcel('tblData')" style="background-color: #127c5b;">اكسيل</button>
             <button class="btn btn-lg text-white btn-dark backButton mt-4" type="button" name="back" onclick="location.href='home.php'">رجوع</button> 
            
          </div>
              
        </div>
      </form>
    </div>


  </div>  

<hr style="width: 50%";>
<?php
if(isset($_POST['search'])){
$table = $_POST['table'];
    if($table == '1'){ 
?>
    <!-- Start Of First table  -->
   <div class="container mt-5" style="background-color:#eeeeee;">
       <h5 class="text-center py-2 font-weight-bold">تقدير أعداد السكان طبقاً للنوع فى أول يناير 1996 - 2019</h5>
      
    <img src="img/Picture3.png" width="100%" height="500px"  style="background-color:#ffffff;">
   <p class="mt-2 font-weight-bold text-right" style="color:#3568c1; cursor: pointer;" id="showHide" onclick="toggleForm1()">
          <i class="fas fa-chevron-down"></i> 
       الجدول
       </p>
       <div id="shape" style="display:block; background-color:#ffffff;">
     <table  class="table table-striped table-bordered table-hover mt-3" style="background-color:#ffffff;">
  <thead>
    <tr class="text-center">
      <th scope="col">السنة</th>
      <th scope="col">ذكور</th>
      <th scope="col" >إناث</th>
      <th scope="col">جملة</th>
    </tr>
     

      
      
  </thead>
  <tbody>
      <?php
        
      $result = $conn->query("SELECT * from popjans GROUP by years order by id ASC");
	$customers = $result->fetch_all(MYSQLI_ASSOC);
       foreach($customers as $customer) :  ?>
	 		    		    <tr>
    <td><?php echo $customer['years'];?></td>
    <td><?php echo $customer['male'];?></td>
      <td><?php echo $customer['female'];?></td>                            
         <td><?php echo $customer['total'];?></td>

                                                        
      </tr>
	        		<?php endforeach; ?>
      
      
      
      
      

      
      
      

      
      
  </tbody>
</table> 
           </div>
        </div>  
<!-- End Of First table  -->
<?php
                         }
    else if($table == '64'){ 
?>
        
    <!-- Start Of First table  -->
  <div class="container mt-5" style="background-color:#eeeeee;">
       <h5 class="text-center py-2 font-weight-bold"> السكان منتصف العام 2007 - 2017</h5>
      
    <img src="img/Picture4.png" width="100%" height="500px"  style="background-color:#ffffff;">
   <p class="mt-2 font-weight-bold text-right" style="color:#3568c1; cursor: pointer;" id="showHide" onclick="toggleForm1()">
          <i class="fas fa-chevron-down"></i> 
       الجدول
       </p>
       <div id="shape1" style="display:block; background-color:#ffffff;">
     <table  class="table table-striped table-bordered table-hover mt-3" style="background-color:#ffffff;">
  <thead>
    <tr class="text-center">
      <th scope="col">المحافظة</th>
      <th scope="col">2017</th>
      <th scope="col" >2016</th>
      <th scope="col">2015</th>
        <th scope="col">2014</th>
      <th scope="col" >2013</th>
      <th scope="col">2012</th> 
        <th scope="col">2011</th>
      <th scope="col" >2010</th>
      <th scope="col">2009</th>
        <th scope="col" >2008</th>
      <th scope="col">2007</th>
        
        
        
        
        
        
        
    </tr>
     

      
      
  </thead>
  <tbody>
      <?php
        $governorate = $_POST['governorate'];
        if($governorate == 'none'){
      $result = $conn->query("SELECT * from popjul GROUP by gov order by id ASC");
	$customers = $result->fetch_all(MYSQLI_ASSOC);
   
      }
        else{
            $result = $conn->query("SELECT * from popjul where gov = '$governorate'");
	$customers = $result->fetch_all(MYSQLI_ASSOC);
       
        }
         foreach($customers as $customer) : 
      ?>
	 		    		    <tr>
    <td><?php echo $customer['gov'];?></td>
    <td><?php echo $customer['2017'];?></td>
      <td><?php echo $customer['2016'];?></td>                            
         <td><?php echo $customer['2015'];?></td>
 <td><?php echo $customer['2014'];?></td>
    <td><?php echo $customer['2013'];?></td>
      <td><?php echo $customer['2012'];?></td>                            
         <td><?php echo $customer['2011'];?></td>
 <td><?php echo $customer['2010'];?></td>
    <td><?php echo $customer['2009'];?></td>
      <td><?php echo $customer['2008'];?></td>                            
         <td><?php echo $customer['2007'];?></td>

                                                        
      </tr>
	        		<?php endforeach; ?>
      
      
      
      
      

      
      
      

      
      
  </tbody>
</table> 
           </div>
        </div> 
<!-- End Of First table  -->       
        
  <?php      
    }

}

?>
       

       
  <script type="text/javascript">
       document.getElementById('type').value = "<?php echo $_POST['type'];?>";
     document.getElementById('table').value = "<?php echo $_POST['table'];?>";
    document.getElementById('governorate').value = "<?php echo $_POST['governorate'];?>";
</script>  
<script>
    function datatype(){
        console.log("done");
        var datatype = document.getElementById("type").value;
        if(datatype == 'المحافظة'){
            document.getElementById("governorate").disabled = false;
        }
    }
    
    
             function toggleForm() {
    var form = document.getElementById("shape");
    var showHide = document.getElementById("showHide");

    if (form.style.display == "none") {

        form.style.display = "block";
        form.style.backgroundColor = "white";
        showHide.innerHTML = '<i class="fas fa-chevron-up"></i> الجدول';
    }
    else {

        form.style.display = "none";
        showHide.innerHTML = '<i class="fas fa-chevron-down"></i> الجدول';

    }
}


    
    
                 function toggleForm1() {
    var form = document.getElementById("shape");
    var showHide = document.getElementById("showHide");

    if (form.style.display == "none") {

        form.style.display = "block";
        form.style.backgroundColor = "white";
        showHide.innerHTML = '<i class="fas fa-chevron-up"></i> الجدول';
    }
    else {

        form.style.display = "none";
        showHide.innerHTML = '<i class="fas fa-chevron-down"></i> الجدول';

    }
}

    
    
    function myfunction(){
         var datatype = document.getElementById("type").value;
        if(datatype == 'المحافظة'){
            document.getElementById("governorate").disabled = false;
        }
    }
</script>
       
   </body>


