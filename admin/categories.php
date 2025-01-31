<?php 
include 'includes/check_user.php'; 
include 'includes/check_reply.php';
?>
<!DOCTYPE html>
<html>
   
<head>
        
        <title> Manage Categories</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Creative Projects" />
        <meta name="keywords" content="Creative Projects" />
        <meta name="author" content="WWW.FACEBOOK.COM/ALI.JAAFAR.0" />

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="../assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="../assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="../assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="../assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="../assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        <link href="../assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>	
        <link href="../assets/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>	
        <link href="../assets/plugins/x-editable/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css">
        <link href="../assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
		<link href="../assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/images/icon.png" rel="icon">
        <link href="../assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/snack.css" rel="stylesheet" type="text/css"/>
        <script src="../assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="../assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
		

        
    </head>
    <body <?php if ($ms == "1") { print 'onload="myFunction()"'; } ?>  class="page-header-fixed">
        <div class="overlay"></div>
        <div class="menu-wrap">
            <nav class="profile-menu">
                <div class="profile">
				<?php 
				if ($myavatar == NULL) {
				print' <img width="60" src="../assets/images/'.$mygender.'.png" alt="'.$myfname.'">';
				}else{
				echo '<img src="data:image/jpeg;base64,'.base64_encode($myavatar).'" width="60" alt="'.$myfname.'"/>';	
				}
						
				?>
				<span><?php echo "$myfname"; ?> <?php echo "$mylname"; ?></span></div>
                <div class="profile-menu-list">
                    <a href="profile.php"><i class="fa fa-user"></i><span>الحساب الشخصي</span></a>
                    <a href="logout.php"><i class="fa fa-sign-out"></i><span>الخروج</span></a>
                </div>
            </nav>
            <button class="close-button" id="close-button">اغلاق</button>
        </div>
        <form class="search-form" action="search.php" method="GET">
            <div class="input-group">
                <input type="text" name="keyword" class="form-control search-input" placeholder="Search student..." required>
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
            </div>
        </form>
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="./" class="logo-text"><span><img src="kashipara.png" alt="" height="76" width="130"></span></a>
                    </div>
                    <div class="search-button">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-right">
                                <li>	
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <span class="user-name"><?php echo "$myfname"; ?> <?php echo "$mylname"; ?><i class="fa fa-angle-down"></i></span>
										<?php 
						                if ($myavatar == NULL) {
						                print' <img class="img-circle avatar"  width="40" height="40" src="../assets/images/'.$mygender.'.png" alt="'.$myfname.'">';
						                }else{
						                echo '<img width="40" height="40" src="data:image/jpeg;base64,'.base64_encode($myavatar).'" class="img-circle avatar"  alt="'.$myfname.'"/>';	
						                }
						
						                ?>
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        <li role="presentation"><a href="profile.php"><i class="fa fa-user"></i>الحساب الشخصي</a></li>
                                        <li role="presentation"><a href="logout.php"><i class="fa fa-sign-out m-r-xs"></i>الخروج</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="logout.php" class="log-out waves-effect waves-button waves-classic">
                                        <span><i class="fa fa-sign-out m-r-xs"></i>الخروج</span>
                                    </a>
                                </li>
                                <li>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <div class="sidebar-header">
                        <div class="sidebar-profile">
                            <a href="javascript:void(0);" id="profile-menu-link">
                                <div class="sidebar-profile-image">
								<?php 
						        if ($myavatar == NULL) {
						        print' <img class="img-circle img-responsive" src="../assets/images/'.$mygender.'.png" alt="'.$myfname.'">';
						        }else{
						        echo '<img src="data:image/jpeg;base64,'.base64_encode($myavatar).'" class="img-circle img-responsive"  alt="'.$myfname.'"/>';	
						        }
						
						        ?>
                       
                                </div>
                                <div class="sidebar-profile-details">
                                    <span><?php echo "$myfname"; ?> <?php echo "$mylname"; ?><br><small>الادمن</small></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <ul class="menu accordion-menu">
                        <li>
                            <a href="./" class="waves-effect waves-button">
                                <span class="menu-icon glyphicon glyphicon-home"></span><p>لوحة التحكم</p>
                            </a>
                        </li>
                        <li>
                            <a href="departments.php" class="waves-effect waves-button">
                                <span class="menu-icon glyphicon glyphicon-folder-open"></span><p>الاقسام</p>
                            </a>
                        </li>
                        <li class="active">
                            <a href="categories.php" class="waves-effect waves-button">
                                <span class="menu-icon glyphicon glyphicon glyphicon-tags"></span><p>المرحلة</p>
                            </a>
                        </li>
                        <li>
                            <a href="subject.php" class="waves-effect waves-button">
                                <span class="menu-icon glyphicon glyphicon glyphicon-file"></span><p>المواد</p>
                            </a>
                        </li>
                        <li>
                            <a href="video.php" class="waves-effect waves-button">
                                <span class="menu-icon glyphicon glyphicon glyphicon-film"></span><p>المحاضرات المصورة</p>
                            </a>
                        </li>
                        <li>
                            <a href="students.php" class="waves-effect waves-button">
                                <span class="menu-icon glyphicon glyphicon glyphicon-user"></span><p>الطلبة</p>
                            </a>
                        </li>
                        <li>
                            <a href="examinations.php" class="waves-effect waves-button">
                                <span class="menu-icon glyphicon glyphicon-book"></span>
                                <p>الامتحانات</p>
                            </a>
                        </li>
                        <li>
                            <a href="questions.php" class="waves-effect waves-button">
                                <span class="menu-icon glyphicon glyphicon-question-sign"></span><p>الاسئلة</p>
                            </a>
                        </li>
                        <li>
                            <a href="notice.php" class="waves-effect waves-button">
                                <span class="menu-icon glyphicon glyphicon-th-list"></span><p>الاشعارات والملاحضات</p>
                            </a>
                        </li>
                        <li>
                            <a href="results.php" class="waves-effect waves-button">
                                <span class="menu-icon glyphicon glyphicon-certificate"></span><p>نتائج الامتحان</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-inner">
                <div class="page-title">
                    <h3>ادارة المراحل</h3>



                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
						<div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-white">
                                    <div class="panel-body">
                                        <div role="tabpanel">
                                   
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#tab5" role="tab" data-toggle="tab">المراحل</a></li>
                                                <li role="presentation"><a href="#tab6" role="tab" data-toggle="tab">اظافة مرحلة</a></li>
                                            </ul>
                                    
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active fade in" id="tab5">
                                           <div class="table-responsive">
										   <?php
										   include '../database/config.php';
										   $sql = "SELECT * FROM tbl_categories";
                                           $result = $conn->query($sql);

                                           if ($result->num_rows > 0) {
										print '
										<table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>الاسم</th>
												<th>المعرف</th>
												<th>الحالة</th>
                                                <th>الفرع</th>
                                                <th>وقت الاظافة</th>
                                                <th>التعديل</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>الاسم</th>
                                                <th>المعرف</th>
                                                <th>الحالة</th>
                                                <th>الفرع</th>
                                                <th>وقت الاظافة</th>
                                                <th>التعديل</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>';
     
                                           while($row = $result->fetch_assoc()) {
											   $status = $row['status'];
											   if ($status == "Active") {
											   $st = '<p class="text-success">مفعل</p>';
											   $stl = '<a href="pages/make_ct_in.php?id='.$row['category_id'].'">تعطيل</a>';
											   }else{
											   $st = '<p class="text-danger">معطل</p>'; 
                                               $stl = '<a href="pages/make_ct_ac.php?id='.$row['category_id'].'">تفعيل</a>';											   
											   }
                                          print '
										       <tr>
                                                <td>'.$row['name'].'</td>
												<td>'.$row['category_id'].'</td>
                                                <td>'.$st.'</td>
                                                <td>'.$row['department'].'</td>
												<td>'.$row['date_registered'].'</td>
                                                <td><div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    اختر
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>'.$stl.'</li>
                                                    <li><a'; ?> onclick = "return confirm('Drop <?php echo $row['name']; ?> ?')" <?php print ' href="pages/drop_ct.php?id='.$row['category_id'].'">حذف</a></li>
                                                </ul>
                                            </div></td>
          
                                            </tr>';
                                           }
										   
										   print '
									   </tbody>
                                       </table>  ';
                                            } else {
												print '
												<div class="alert alert-info" role="alert">
                                        Nothing was found in database.
                                    </div>';
    
                                           }
                                           $conn->close();
										   
										   ?>


                 

                                    </div>
                                                       
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab6">
                                         <form action="pages/add_category.php" method="POST" style="direction: rtl;">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">اسم المرحلة</label>
                                            <input type="text" class="form-control" placeholder="Enter category name" name="category" required autocomplete="off">
                                        </div>
										<div class="form-group">
                                            <label for="exampleInputEmail1">اختر الفرع</label>
                                            <select class="form-control" name="department" required>
											<option value="" selected disabled>- اختر الفرع-</option>
											<?php
											include '../database/config.php';
											$sql = "SELECT * FROM tbl_departments WHERE status = 'Active' ORDER BY name";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
    
                                            while($row = $result->fetch_assoc()) {
                                            print '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                            }
                                           } else {
                          
                                            }
                                             $conn->close();
											 ?>
											
											</select>
                                        </div>

                                        <button type="submit" class="btn btn-primary">اظافة</button>
                                       </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>  
  
                            </div>
                        </div>


                        </div>
                    </div>
                </div>
               
            </div>
        </main>
		<?php if ($ms == "1") {
?> <div class="alert alert-success" id="snackbar"><?php echo "$description"; ?></div> <?php	
}else{
	
}
?>

        <div class="cd-overlay"></div>

        <script src="../assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="../assets/plugins/pace-master/pace.min.js"></script>
        <script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../assets/plugins/switchery/switchery.min.js"></script>
        <script src="../assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="../assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="../assets/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="../assets/plugins/waves/waves.min.js"></script>
        <script src="../assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="../assets/plugins/jquery-mockjax-master/jquery.mockjax.js"></script>
        <script src="../assets/plugins/moment/moment.js"></script>
        <script src="../assets/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="../assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
        <script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="../assets/js/modern.min.js"></script>
        <script src="../assets/js/pages/table-data.js"></script>
		<script src="../assets/plugins/select2/js/select2.min.js"></script>
        
		<script>
function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
    </body>

</html>