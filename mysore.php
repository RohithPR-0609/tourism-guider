                         
                         
<!DOCTYPE HTML>
<!--
    Road Trip by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title>tourism information</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>
        <h1></h1>
        <h1></h1>
        <header id="header">
                 <header id="header">
                
   <h2><button><a href="index.html">home page</a></button></h2> 
                
            </header>
                <div class="logo"><a href="index.html">Tourism information</a></div>
                 </header>
            <section id="banner" class="bg-img" data-bg="banner3.jpg">
                <div class="inner"><header>
<center><h3>welcome to MYSURU:</h3></center>
<h4><I>Mysore (or Mysuru), a city in India's southwestern Karnataka state, was the capital of the Kingdom of Mysore from 1399 to 1947. In its center is opulent Mysore Palace, seat of the former ruling Wodeyar dynasty. The palace blends Hindu, Islamic, Gothic and Rajput styles. Mysore is also home to the centuries-old Devaraja Market, filled with spices, silk and sandalwood.<I></h4><center> <table border="5" cellpadding="40" style="margin-top: 100px"><tr><th>Name</th>
        <th>Open time</th>
        <th>Close timings</th>
        <th>Near By</th></center>
        


            
            <?php
$con=mysqli_connect("localhost","root","","tourism");
if(!$con){
    echo"database connection failed";
}
$query="SELECT spot,time,bus_dist,hospital FROM tour WHERE city_id=2";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){
    echo"<tr>";
   
    echo"<td>".$row['spot']."</td>";
    echo"<td>".$row['time']."</td>";
    echo"<td>".$row['bus_dist']."</td>";
    echo"<td>".$row['hospital']."</td>";
    echo"</tr>";
}

?>

   

                    </header>
                </div>
                
            </section>

        <!-- One -->
            

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>
    




