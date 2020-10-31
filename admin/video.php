    <?php 
include 'includes/check_user.php'; 
include 'includes/check_reply.php';
?>
<!DOCTYPE html>
<html>
   
<head>
        
        <title>Lectures</title>
        
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
		

        <link href="../assets/plugins/summernote-master/summernote.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/bootstrap-colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css"/>
        
		

        
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
                                        <span><i class="fa fa-sign-out m-r-xs"></i>اغلاق</span>
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
                        <li>
                            <a href="categories.php" class="waves-effect waves-button">
                                <span class="menu-icon glyphicon glyphicon glyphicon-tags"></span><p>المرحلة</p>
                            </a>
                        </li>
                        <li>
                            <a href="subject.php" class="waves-effect waves-button">
                                <span class="menu-icon glyphicon glyphicon glyphicon-file"></span><p>المواد</p>
                            </a>
                        </li>
                        <li class="active">
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
                    <h3>المحاضرات</b>"</h3>



                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
						<div class="row">
                            <div class="col-md-12">
                                <div align="right">
                                    <button type="button" name="add" id="add" class="btn btn-success">اظافة محاضرة</button>
                                </div>
                                <div id="image_data">
                                  
                                </div>
                            </div>
                        </div>


                        </div>
                    </div>
                </div>
               
            </div>
        </main>
		<?php if ($ms == "1") {?> 
            <div class="alert alert-success" id="snackbar"><?php echo "$description"; ?></div> 
        <?php }?>

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
        <script src="../assets/plugins/summernote-master/summernote.min.js"></script>
        <script src="../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script src="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="../assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="../assets/js/pages/form-elements.js"></script>
	<div id="imageModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 align="left" class="modal-title">اظافة محاضرة</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="image_form" method="post" enctype="multipart/form-data" style="direction: rtl;">
                        <p><label>عنوان المحاضرة</label><br>
                            <input type="text" name="title" required style="width: 100%" id="title" /></p><br />
                        <p><label>اختر  النلف</label><br>
                            <input type="file" name="image" required style="width: 100%" id="image" /></p><br />
                        <label>تاريخ الانتهاء</label><br>
                            <input type="date" name="date" required id="date" style="width: 100%" /></p><br />
                        <input type="hidden" name="action" id="action" value="insert" />
                        <input type="hidden" name="image_id" id="image_id" />
                        <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
    
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
                </div>
            </div>
        </div>
    </div>	

	<script>
        function myFunction() {
            var x = document.getElementById("snackbar")
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        }
        $(document).ready(function () {

            fetch_data();

            function fetch_data() {
                var action = "fetch";
                $.ajax({
                    url: "action.php",
                    method: "POST",
                    data: { action: action },
                    success: function (data) {
                        $('#image_data').html(data);
                    }
                })
            }
            $('#add').click(function () {
                $('#imageModal').modal('show');
                $('#image_form')[0].reset();
                $('.modal-title').text("اظافة ");
                $('#image_id').val('');
                $('#action').val('insert');
                $('#insert').val("Insert");
            });
            $('#image_form').submit(function (event) {
                event.preventDefault();
                var image_name = $('#image').val();
                if (image_name == '') {
                    alert("رجاء اختر ملف");
                    return false;
                }
                else {
                    var extension = $('#image').val().split('.').pop().toLowerCase();
                    if (jQuery.inArray(extension, ['mkv','mp4']) == -1) {
                        alert("ملف غير صالح");
                        $('#image').val('');
                        return false;
                    }
                    else {
                        $.ajax({
                            url: "action.php",
                            method: "POST",
                            data: new FormData(this),
                            contentType: false,
                            processData: false,
                            success: function (data) {
                                alert(data);
                                fetch_data();
                                $('#image_form')[0].reset();
                                $('#imageModal').modal('hide');
                            }
                        });
                    }
                }
            });
            $(document).on('click', '.update', function () {
                $('#image_id').val($(this).attr("id"));
                $('#action').val("update");
                $('.modal-title').text("تعديل ");
                $('#insert').val("Update");
                $('#imageModal').modal("show");
            });
            $(document).on('click', '.delete', function () {
                var image_id = $(this).attr("id");
                var action = "delete";
                if (confirm("Are you sure you want to remove this Lecture from database?")) {
                    $.ajax({
                        url: "action.php",
                        method: "POST",
                        data: { image_id: image_id, action: action },
                        success: function (data) {
                            alert(data);
                            fetch_data();
                        }
                    })
                }
                else {
                    return false;
                }
            });
        });  

    </script>
    </body>

</html>