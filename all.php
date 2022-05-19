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
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
        
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
            
            <div class="col-2 mt-4">
            <h5 class="text-white d-inline" style="font-weight: bold;">الخدمات</h5>
            </div>
        </div>
    </nav>
      
       
       <?php 

 require_once 'connection.php'; 
 $query = "SELECT gov,total_lib,libraries,count(*) as number from culture GROUP BY gov";  
 $result = mysqli_query($conn, $query); 
       ?>
       
       
           <div class="previous1 col-11 mr-5 pt-5">   
              <p class="text-center font-weight-bold">بيان بالتوزيع الجغرافى الوظيفى لمكتبات الآطفال والعاملين بها  عام  2013</p>
                <div  id="piechart" style="width: 100%; height: 500px;">
              </div>
           </div> 
       
       
       
       
       
          <script type="text/javascript"> 
                    google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart); 
                           
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
            ['total_lib','libraries','number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
        echo "['".$row["total_lib"]."','".$row["libraries"]."','".$row["number"]."'],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                       animation: {
          duration: 5000,
          easing: 'out',
          startup: true
      },
                    legend:'bottom',
                  
                      //is3D:true,  
                      pieHole: 0.4,
                    isStacked: true
                     };  
                var chart = new google.visualization.BarChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
              
    </script>
       
       
       
       
        <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

       
    </body>
</html>