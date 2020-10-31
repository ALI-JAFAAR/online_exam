<?php include 'includes/check_user.php'; 
include 'includes/fetch_records.php';
?>
<!DOCTYPE html>
<html>
    
<head>
        
        <title>  Admin Dashboard</title>
        
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
        <link href="../assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>	
        <link href="../assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet" type="text/css"/>	
        <link href="../assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>	
        <link href="../assets/images/icon.png" rel="icon">
        <link href="../assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="../assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="../assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
    </head>
    <body class="page-header-fixed">
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
                    <a href="profile.php"><i class="fa fa-user"></i><span>الملف الشخصي</span></a>
                    <a href="logout.php"><i class="fa fa-sign-out"></i><span>الخروج</span></a>
                </div>
            </nav>
            <button class="close-button" id="close-button">اغلاق</button>
        </div>
        <form class="search-form" action="search.php" method="GET">
            <div class="input-group">
                <input type="text" name="keyword" class="form-control search-input" placeholder="Search student..." required>
                <span class=    "input-group-btn">
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
                        <a href="./" class="logo-text"></span></a>
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
                        <li class="active">
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
                    <h3>لوحة تحكم الادمن</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="./">الصفحة الرئيسية</a></li>
                            <li class="active">لوحة تحكم الادمن</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter"><?php echo number_format($departments); ?></p>
                                        <span class="info-box-title">الاقسام</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-folder"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter"><?php echo number_format($students); ?></p>
                                        <span class="info-box-title">الطلبة</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-user"></i>
                                    </div>
     
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p><span class="counter"><?php echo number_format($examination); ?></span></p>
                                        <span class="info-box-title">الامتحانات</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-book-open"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter"><?php echo number_format($subjects); ?></p>
                                        <span class="info-box-title">المواد</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-docs"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter"><?php echo number_format($categories); ?></p>
                                        <span class="info-box-title">المراحل <?php echo "$fp $pp"; ?></span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-tag"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter"><?php echo number_format($notice); ?></p>
                                        <span class="info-box-title">الملاحظات والاشعارات</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-list"></i>
                                    </div>
     
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p><span class="counter"><?php echo number_format($questions); ?></span></p>
                                        <span class="info-box-title">الاسئلة</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-question"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter"><?php echo number_format($banned_students); ?></p>
                                        <span class="info-box-title">الطلبة الذين تم حضرهم</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-lock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="panel panel-white">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="visitors-chart">
                                            <div class="panel-body">
                                            <div id="chartContainer"  style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
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
        <script src="../assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../assets/plugins/jquery-counterup/jquery.counterup.min.js"></script>
        <script src="../assets/plugins/toastr/toastr.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="../assets/plugins/curvedlines/curvedLines.js"></script>
        <script src="../assets/plugins/metrojs/MetroJs.min.js"></script>
        <script src="../assets/js/modern.js"></script>
		<script src="../assets/js/canvasjs.min.js"></script>
		 
		 <script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light1", 
	exportEnabled: true,
	animationEnabled: true,
	title: {
		text: "مخطط يوضح النسبة بين الطلبة الذين  تجاوزو الاختبارات والذين اخفقوا فيها"
	},
	data: [{
		type: "pie",
		startAngle: 25,
		toolTipContent: "<b>{label}</b>: {y}",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}",
		dataPoints: [
			{ y: <?php echo "$std_pass"; ?>, label: "الطلبة الذين تجاوزو الاختبارات" },
			{ y: <?php echo "$std_fails"; ?>, label: "الطلبة الذين اخفقوا في الاختبارات" }

		]
	}]
});
chart.render();

}
</script>
        
    </body>


</html>                                                                      