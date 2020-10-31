
<?php
//action.php
if(isset($_POST["action"])){
 $connect = mysqli_connect("localhost", "holmes_user_vide", "Holmes_*9_courses", "holmes_courses_db");
 if($_POST["action"] == "fetch"){
  $d = date("d-m-y");
  $query = "SELECT * FROM videos WHERE  '$d' < 'limit_date'";
  $result = mysqli_query($connect, $query);
  if($result){
    $output = '<br>
     <table class="table table-bordered table-striped">  
      <tr>
       <th style="text-align:center;" width="10%">المعرف</th>
       <th style="text-align:center;" width="40%">العنوان</th>
       <th style="text-align:center;" width="40%">المحاضرة</th>
       <th style="text-align:center;" width="10%">تاريخ الانتهاء</th>
      </tr>
    ';
    while($row = mysqli_fetch_array($result)){
     $output .= '

      <tr>
       <td style="text-align:center;">'.$row["id"].'</td>
       <td style="text-align:center;">'.$row["title"].'</td>
       <td style="text-align:center;">
          <video width="320" height="240" controls>
              <source src="../assets/images/'.$row["name"].'" type="video/mp4">
          </video>
       </td>
       <td style="text-align:center;">'.$row["limit_date"].'</td>
      </tr>
     ';
    }
    $output .= '</table>';
    echo $output;
  }
 }
}
?>