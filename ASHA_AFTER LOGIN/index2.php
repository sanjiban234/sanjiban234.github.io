<!DOCTYPE html>
<?php
session_start();
$dbcon=mysqli_connect("localhost","root","","ideathon");
if(!$_SESSION['username'])
{
	header("Location: login.html");
}
$user = $_SESSION['username'];
$check_user = "select * from asha where asha.username='$user'";
?>
<html >
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Welcome</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index2.html">Welcome</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 oct 2017 &nbsp; <a href="../index.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  align="center" class="active-menu"  href="index2.html"><strong> Profile</strong></a>
                    </li>
		 <li>
                        <a align="center"  href="ui1.html"><strong>Registration</strong></a>
                    </li>
                     
                    <li>			
					
			  <a align="center"   href="asha table.html"><strong> Details</strong></a>		                   
                    <li>
                        
                               
                            </li>
                        </ul>
                      </li>  
                  
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>USER DASHBOARD</h2>   
                        <h4>Welcome <b>
						<?php
						if ($result=mysqli_query($dbcon,$check_user))
						{
						  // Fetch one and one row
						  while ($row=mysqli_fetch_row($result))
							{
							echo $row[3];
							}
						}
						?></b>, Love to see you back. </h4>
                    </div>
                </div>              
                 <!-- /. ROW  -->







                 
                 <hr />
                 <div class="row">
                    
                      <div class="col-md-7">
                          <div class="panel panel-default">
                                <div class="panel-heading">
                                    USER DETAILS
                                </div>        
                                      
                                    <div class="panel-body">
                                  </div>
                               

               
                  <div>
				  <?php
				$result=mysqli_query($dbcon,$check_user);
				$row=mysqli_fetch_row($result);
				$asha_id = $row[0];
				//$get_hosp = "select hospital.hosp_name from hospital, doctor where hospital.hosp_id = '$hosp_id'";
				//$get_hosp_res = mysqli_query($dbcon, $get_hosp);
				//$hosp_row = mysqli_fetch_row($get_hosp_res);
						echo '<a  > <h2> NAME: '.$row[3].'</h2>';
                        echo '<a  name="name"> <h2> REG. ID: '.$row[8].'</h2></a>';
                        echo '<a  name="name"> <h2> CONTACT: '.$row[5].'</h2></a>';
                        echo '<a  name="name"> <h2> ADDRESS: '.$row[6].'</h2></a>';

                        echo '<a name="name"> <h2> LOCATION: '.$row[4].'</h2></a>';
				?>
                 </div>  


               </div>
             </div>
           </div>


  <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-blue">
                        <div class="panel-body">
                          <h4>UPLOAD IMAGE</h4>
                              <form action="assets/php/action.php">
                                  <input type="file" name="pic" accept="image/*">
                                  <input type="submit">
                              </form>
                        </div>
                        
                    </div>
                  <script src="assets/js/jquery-1.10.2.js"></script>
                  <script src="assets/js/bootstrap.min.js"></script>
                  <script src="assets/js/jquery.metisMenu.js"></script>
                   <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
                  <script src="assets/js/morris/morris.js"></script>
                  <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
