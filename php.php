<html>
    <head>
        <title> login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css\style.css">
    </head>
<body>
    <div class="log" >
        <img style="width: 100px;float: right;margin-right: 20px;" src="img/img2.png"  > 
      
    </div>
     
    <nav class="menu">
     <ul>
      <li><a href="http://localhost/lib/lib.php"><h3>الرئيسية</h3></a></li>    
      <li><a href="http://localhost/lib/par.php"><h3>الاقسام</h3></a></li> 
      <li><a href="http://localhost/lib/help.php"><h3>المساعدة</h3></a></li>
      <li><a href="http://localhost/lib/about.php"><h3>حول</h3></a></li>
      
     </ul>
      <form class="search-form" >
     
     <input type="text" placeholder="بحث">
     <button>بحث</button>
     
 </form>
 
      
    </nav>
     <div class="boxs">
        <center>
           <div class="box">
        <h2></h2>
        <table class="tab">
            <table style="border-collapse:collapse ;width: 60%;margin: 100px auto;background-color: white;">
        <thead>
            <th style="height: 50px;vertical-align: center;border: 1px solid black;">ID</th>
            <th style="height: 50px;vertical-align: center;border: 1px solid black;">NAME</th>
            <th style="height: 50px;vertical-align: center;border: 1px solid black;">SIZE</th>
            <th style="height: 50px;vertical-align: center;border: 1px solid black;">DOWNLOAD</th>
            <th style="height: 50px;vertical-align: center;border: 1px solid black;">Action</th>
        </thead>
    <tbody>
        <tr>
<?php 
$conn=mysqli_connect("localhost","root","","lib");

$sql="SELECT * FROM php";

$result=mysqli_query($conn,$sql);
$files=mysqli_fetch_all($result,MYSQLI_ASSOC);

foreach ($files as $file ) {
    // code...
echo "<td>".$file['id']."</td>";
echo "<td>".$file['name']."</td>";
echo "<td>".$file['size']."kb"."</td>";
echo "<td>".$file['download']."</td>";
echo "<td>"."<a href=php.php?file_id=".$file['id'].">"."downlod"."</a>"."</td>";
echo "<tr>";
    echo "<td>"."<br>"."</td>";
    echo "</tr>";
}
 ?>
    
 </tr>
    </tbody>
 </table>
        </table> 
        </center>
            
        
         
        </div>
    
        <div class="box2">
            <h2>اللغات</h2>
           <h5><a href="http://localhost/lib/java.php">java</a></h5>
            <h5><a href="http://localhost/lib/c++.php">c++</a></h5>
            
            <h5><a href="http://localhost/lib/php.php">php</a></h5>
            <h5><a href="http://localhost/lib/html.php">html</a></h5>
            <h5><a href="http://localhost/lib/sql.php">sql</a></h5>
            
            <h5><a href="http://localhost/lib/python.php">python</a></h5>
        </div>
     </div>
    
       
    

    <div class="footer">
      <div class="news">
        <ul>
            <li><a href="#">رواد التكنولوجيا تفتح دورة لتصميم</a></li>
            <li><a href="#">عروض جديد للزوار الكرام</a></li>
            <li><a href="#">عروض خاصة بمناسبة الاعياد</a></li>
            <li><a href="#">اصتضافات مجانية</a></li>
            <li><a href="#">تدريبة لتعلم اساليب البرمجة</a></li>
        </ul>
      </div>
      <div class="link">
          رواد التكنولوجيا سارع الطار
          <br/>
          099: 
          < ر/>
          00967714490030 : تلفاكس
          <br/>
          البريد الاكتروني : en_radwad50@yahoo.com
          <br/>
          او عبر الصفحات الاجتماعية 
          <br/>
          <a href="https:www.facebook.com"><img src="img/face.png"></a>
          <a href="https:www.youtube.com"><img src="img/you.png"></a>    <a href="https:www.twiter.com"><img src="img/twt.png"></a>
          <br/>
      </div>
      <div class="soc">
          <a href="#">لمزيد من المزاضيع</a>
          <a href="#">ملفات تعريف الارطبات</a>
          <img  src="img/img5.png">
          <img src="img/img3.png">
      </div>
    </div>
    

</body>    
</html>
