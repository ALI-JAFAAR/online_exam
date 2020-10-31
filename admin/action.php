
<?php
//action.php
if(isset($_POST["action"])){
  $connect = mysqli_connect("localhost", "holmes_user_vide", "Holmes_*9_courses", "holmes_courses_db");
 if($_POST["action"] == "fetch"){
  
  $query = "SELECT * FROM videos ORDER BY id DESC";
  $result = mysqli_query($connect, $query);
  if($result){
    $output = '<br>
     <table class="table table-bordered table-striped">  
      <tr>
       <th style="text-align:center;" width="10%">المعرف</th>
       <th style="text-align:center;" width="30%">العنوان</th>
       <th style="text-align:center;" width="30%">المحاضرة</th>
       <th style="text-align:center;" width="10%">تاريخ الانتهاء</th>
       <th style="text-align:center;" width="10%">تعديل</th>
       <th style="text-align:center;" width="10%">حذف</th>
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
       <td style="text-align:center;"><button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["id"].'">تعديل</button></td>
       <td style="text-align:center;"><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">حذف</button></td>
      </tr>
     ';
    }
    $output .= '</table>';
    echo $output;
  }
 }

 if($_POST["action"] == "insert"){
  $img1    = md5("ALI&aya098@_57839u").str_replace("", "", basename($_FILES["image"]["name"]));
  $title    = $_POST["title"];
  $date    = $_POST["date"];
  $target1 = "../assets/images/".$img1;

  $query = "INSERT INTO videos(name,limit_date,title) VALUES ('{$img1}','{$date}','{$title}')";
  if(mysqli_query($connect, $query)){
    move_uploaded_file($_FILES['image']['tmp_name'],$target1);
   echo 'Lecture Inserted into Database';
  }
 }
 if($_POST["action"] == "update"){
  $img1    = md5("ALI&aya098@_57839u").str_replace("", "", basename($_FILES["image"]["name"]));
  $target1 = "../assets/images/".$img1;
  $date    = $_POST["date"];
  $title    = $_POST["title"];
  $query = "UPDATE videos SET name = '$img1' , limit_date = '$date' , title = '$title' WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query)){
    move_uploaded_file($_FILES['image']['tmp_name'],$target1);
   echo 'Lecture Updated into Database';
  }
 }
 if($_POST["action"] == "delete"){
  $query = "DELETE FROM videos WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query)){
   echo 'Lecture Deleted from Database';
  }
 }
}
?>