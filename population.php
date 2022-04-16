<html dir="rtl">
<head>
    <title>المجلس القومى للطفولة و الامومة - المرصد</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <style>
    @import url('https://fonts.googleapis.com/css2?family=Cairo&display=swap');
        body{
            font-family: 'Cairo', sans-serif; !important
        }
    .previous{
	margin-top: 5px;
    margin-bottom: 10px;
	cursor: pointer;
	background-color: #f0f0f0;
	height: 150px;
	padding-top: 10px;
	border-radius: 10px;
	box-shadow: 1px 2px #888888;
}
.previous:hover{
	cursor: pointer;
	background-color: #f0f0f0;
	height: 150px;
	padding-top: 10px;
	border-radius: 10px;
	box-shadow: 3px 4px 3px 4px #888888;
    transition: 0.5s;
}
         p{
             font-size:20px
         }
         td{
             font-size: 13px;
             text-align: center;
         }
         th{
          font-size: 14px;
             text-align: center;   
         }
    </style>
     </head>
   <body style="overflow-x: hidden; overflow-y:scroll; background-color:white;">
    <nav>
        <div class="row">
            <div class="col-1"><img src="img/logo.png" class="img-fluid"
                    style="height:85px;  margin-top:10px;" /></div>
             <div class="col-3" style="margin-top:30px;">
                <h6 class="text-white d-inline" style="font-weight: bold;">المجلس القومى للطفولة و الامومة</h6>
            </div>
            
            <div class="col-4"></div>
            
            <div class="col-2 mt-3">
            <h4 class="text-white d-inline" style="font-weight: bold;">السكان</h4>
            </div>
        </div>
    </nav>
      
       
   <div class="container mt-5">
       <div class="row">
           <div class="col-1"></div>
       <div class="col-3 ml-3 pt-2" style="background-color:#eeeeee;">
          
           <img src="img/pop-removebg-preview.png" class="img-fluid mb-1" style="height:65px; margin-left:30%;">
                <p class="text-center font-weight-bold" style="color:#365c4b;">(42793347)</p>
                <p class="text-center font-weight-bold" style="color:#365c4b;"> إجمالى عدد السكان<br> اقل من 18 عام </p>
           
           </div>
       
           <div class="col-3 ml-3 pt-2" style="background-color:#eeeeee;">
           <img src="img/Untitled-removebg-preview.png" class="img-fluid mb-1" style="height:65px; margin-left:42%;">
               <p class="text-center font-weight-bold" style="color:#365c4b;">(22093933)</p>
                <p class="text-center font-weight-bold" style="color:#365c4b;">إجمالى عدد الذكور </p>
           
           </div>
       
               <div class="col-3 pt-2" style="background-color:#eeeeee;">
           <img src="img/boy-and-girl-icon-design-vector-25046387-removebg-preview.png" class="img-fluid mb-1" style="height:65px; margin-left:43%;">
                  <p class="text-center font-weight-bold" style="color:#365c4b;">(20699414)</p> 
                <p class="text-center font-weight-bold" style="color:#365c4b;">إجمالى عدد الإناث </p>
           
           </div>
       
       </div>
       

       
       
       </div>    
       
       
       
       
   <div class="container mt-5" style="background-color:#eeeeee;">
       <h5 class="text-center py-2 font-weight-bold">عدد السكان وفقاً لفئات السن والنوع لإجمالى الجمهورية عام 2021</h5>
       
       <img src="img/Picture1.png" width="100%" height="500px"  style="background-color:#ffffff;">
     <table class="table table-striped table-bordered table-hover table-sm mt-3" style="background-color:#ffffff;">
  <thead>
    <tr class="text-center">
      <th scope="col">الفئة العمرية</th>
      <th scope="col" colspan="3">حضر</th>
      <th scope="col" colspan="3">ريف</th>
      <th scope="col" colspan="3">جملة</th>
    </tr>
       <tr>
      <th scope="col"></th>
      <th scope="col">ذكور</th>
      <th scope="col">إناث</th>
      <th scope="col">جملة</th>
             <th scope="col">ذكور</th>
      <th scope="col">إناث</th>
      <th scope="col">جملة</th>
             <th scope="col">ذكور</th>
      <th scope="col">إناث</th>
      <th scope="col">جملة</th>
    </tr> 
      
      
  </thead>
  <tbody>
      <?php
      require_once 'connection.php'; 
      $result = $conn->query("SELECT * from age GROUP by age order by id ASC");
	$customers = $result->fetch_all(MYSQLI_ASSOC);
       foreach($customers as $customer) :  ?>
	 		    		    <tr>
    <td><?php echo $customer['age'];?></td>
    <td><?php echo $customer['civilizeM'];?></td>
      <td><?php echo $customer['civilizeF'];?></td>                            
         <td><?php echo $customer['civilizeT'];?></td>
                                
    <td><?php echo $customer['countrysideM'];?></td>
      <td><?php echo $customer['countrysideF'];?></td>                            
         <td><?php echo $customer['countrysideT'];?></td>
          
        <td><?php echo $customer['totalM'];?></td>                         
         <td><?php echo $customer['totalF'];?></td>                        
    <td><?php echo $customer['totalT'];?></td>
   
                                                        
      </tr>
	        		<?php endforeach; ?>
      
      
      
      
      

      
      
      

      
      
  </tbody>
</table>  
        </div>    

       
       
       
       
       
      <div class="container mt-5" style="background-color:#eeeeee; overflow-x:scroll;">
       <h5 class="text-center py-2 font-weight-bold">فئات السن محافظات   </h5>
       
       <img src="img/Picture3.png" width="100%" height="500px"  style="background-color:#ffffff;">
     <table class="table table-striped table-bordered table-hover table-sm mt-3" style="background-color:#ffffff;">
  <thead>
    <tr class="text-center">
      <th scope="col">الفئة العمرية</th>
      <th scope="col">الجمهورية</th>
     <th scope="col">القاهرة</th>
     <th scope="col">الاسكندرية</th>
     <th scope="col">بورسعيد</th>
     <th scope="col">السويس</th>
     <th scope="col">دمياط</th>
     <th scope="col">الدقهلية</th>
     <th scope="col">الشرقية</th>
     <th scope="col">القليوبية</th>
     <th scope="col">كفر الشيخ</th>
     <th scope="col">الغربية</th>
     <th scope="col">المنوفية</th>
     <th scope="col">البحيرة</th>
     <th scope="col">الاسماعيلية</th>
     <th scope="col">الجيزة</th>
     <th scope="col">بنى سويف</th>
     <th scope="col">الفيوم</th>
     <th scope="col">المنيا</th>
     <th scope="col">اسيوط</th>
     <th scope="col">سوهاج</th>
     <th scope="col">قنا</th>
     <th scope="col">اسوان</th>
     <th scope="col">الاقصر</th>
     <th scope="col">البحر الاحمر</th>
     <th scope="col">الوادى الجديد</th>
     <th scope="col">مطروح</th>
     <th scope="col">شمال سيناء</th>
     <th scope="col">جنوب سيناء</th>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </tr>
 
      
      
  </thead>
  <tbody>
      <?php
      require_once 'connection.php'; 
      $result = $conn->query("SELECT * from gov order by id ASC");
	$customers = $result->fetch_all(MYSQLI_ASSOC);
       foreach($customers as $customer) :  ?>
	 		    		    <tr>
    <td><?php echo $customer['age'];?></td>
 <td><?php echo $customer['الجمهورية'];?></td>
 <td><?php echo $customer['القاهرة'];?></td>
 <td><?php echo $customer['الاسكندرية'];?></td>
 <td><?php echo $customer['بورسعيد'];?></td>
 <td><?php echo $customer['السويس'];?></td>
 <td><?php echo $customer['دمياط'];?></td>
 <td><?php echo $customer['الدقهلية'];?></td>
 <td><?php echo $customer['الشرقية'];?></td>
 <td><?php echo $customer['القليوبية'];?></td>
 <td><?php echo $customer['كفر الشيخ'];?></td>
 <td><?php echo $customer['الغربية'];?></td>
 <td><?php echo $customer['المنوفية'];?></td>
 <td><?php echo $customer['البحيرة'];?></td>
 <td><?php echo $customer['الاسماعيلية'];?></td>
 <td><?php echo $customer['الجيزة'];?></td>
 <td><?php echo $customer['بنى سويف'];?></td>
 <td><?php echo $customer['الفيوم'];?></td>
 <td><?php echo $customer['المنيا'];?></td>
 <td><?php echo $customer['اسيوط'];?></td>
 <td><?php echo $customer['سوهاج'];?></td>
 <td><?php echo $customer['قنا'];?></td>
 <td><?php echo $customer['اسوان'];?></td>
 <td><?php echo $customer['الاقصر'];?></td>
  <td><?php echo $customer['البحر الاحمر'];?></td>
 <td><?php echo $customer['الوادى الجديد'];?></td>
 <td><?php echo $customer['مطروح'];?></td>
 <td><?php echo $customer['شمال سيناء'];?></td>
 <td><?php echo $customer['جنوب سيناء'];?></td>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
      </tr>
	        		<?php endforeach; ?>
      
      
      
      
      

      
      
      

      
      
  </tbody>
</table>  
        </div>      
       
       
       
       
       
       
       
       
       
       
 
        <div class="container mt-5" style="background-color:#eeeeee;">
       <h5 class="text-center py-2 font-weight-bold">عدد السكان اقل من 18 عام</h5>
       
       <img src="img/Picture2.png" width="100%" height="500px"  style="background-color:#ffffff;">
     <table class="table table-striped table-bordered table-hover table-sm mt-3" style="background-color:#ffffff;">
  <thead>
    <tr class="text-center">
      <th scope="col">المحافظة</th>
      <th scope="col">الإجمالى</th>
      <th scope="col">النسبة %</th>
    
    </tr>
 
      
      
  </thead>
  <tbody>
      <?php
      require_once 'connection.php'; 
      $result = $conn->query("SELECT * from perc GROUP by gov order by id ASC");
	$customers = $result->fetch_all(MYSQLI_ASSOC);
       foreach($customers as $customer) :  ?>
	 		    		    <tr>
    <td><?php echo $customer['gov'];?></td>
    <td><?php echo $customer['total'];?></td>
      <td><?php echo $customer['perc'];?></td>                            
     
   
                                                        
      </tr>
	        		<?php endforeach; ?>
      
      
      
      
      

      
      
      

      
      
  </tbody>
</table>  
        </div>    

 <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

       
    </body>
</html>