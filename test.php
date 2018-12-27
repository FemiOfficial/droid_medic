<?php
include_once "res/connect.php";
include_once "res/session.php";

include_once "res/functions.php";

if(isset($_POST["sign-up-btn"])){
  signUp();
}
if(isset($_POST["sign-in-btn"])){
  signIn();
}
if(isset($_POST["btn-logout"])){
  logOut();
}


if( !isset($_SESSION["login-status"])){
    header("location: index.php");
  }

if(isset($_POST["sel-soft-issue"])){
    $fault_type = $_POST["sel-soft-issue"];
$sql = "SELECT * FROM fault_questions WHERE fault_type = '$fault_type'  AND fault_category = '1'";

}
else if(isset( $_POST["sel-hard-issue"])){
     $fault_type = $_POST["sel-hard-issue"];
$sql = "SELECT * FROM fault_questions WHERE fault_type = '$fault_type'  AND fault_category = '0'";

}
else{
  ?>
    <script type="text/javascript">
      alert("No fault selected");
      window.open('diagnosis.php', '_self')
    </script>
  <?php
}
$questions = array();
$i = 0;
$result = mysqli_query($conn, $sql);
$num_row = mysqli_num_rows($result);

while($row = mysqli_fetch_array($result)){
    $questions[$i] = $row["id"];
    $i++;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Diagnose Android Phone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Files  -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script type = "text/javascript" src="js/jquery-2.1.4.min.js"></script>
  
        <script type = "text/javascript" src="js/bootstrap.js"></script>

        <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(window).load(function(){
                $("#preloader").fadeOut('slow', function(){$(this).remove();});
               
                });
            });
    </script>

    
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" style = "margin:0;padding:0;border-radius:0;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#" style = "color: #80c152">DroidMedic</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <!-- <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li> 
        <li><a href="#">Page 3</a></li> 
      </ul> -->
      <ul class="nav navbar-nav navbar-right">
        <?php
          if(isset($_SESSION["id"])){
            ?>
      <li><button class="btn-sign-user" id= "btn-reg" ><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION["username"]; ?></button></li>
        <li>
          <form method="post" role = "form" class="register-form">    
          <button type = "submit" class="btn-sign" id= "btn-login" name = "btn-logout">
          <span class="glyphicon glyphicon-log-in"></span>
          Log Out
          </button>   
	      	</form>

        </li>
            <?php
          }else{  
            
        ?>
        <li><button class="btn-sign" id= "btn-reg" data-toggle ="modal" data-target="#modal-reg"><span class="glyphicon glyphicon-user"></span> Sign Up</button></li>
        <li><button class="btn-sign" id= "btn-login" data-toggle ="modal" data-target="#modal-login"><span class="glyphicon glyphicon-log-in"></span> Sign In</button></li>
          <?php
              }
          ?>
      </ul>



    </div>
  </div>
</nav>
<!-- the sign in modal -->

<div class="modal fade" id="modal-login" role="dialog">
			<div class="modal-dialog">
	  			<div class="modal-content">
	   				 <div class="modal-header">
	     				<button type="button" class="close" style="width:10px;" data-dismiss="modal">&times;</button>
	      				<h4 class="modal-title">SIGN IN</h4>
	      				<div class="modal-body">
	      				<form method="post" role = "form" class="login-form">
	      						<div class="form-group">
	      							<input type="text" id = "login-user" class="form-control" name="login-user" placeholder="Enter Username" required />
	      						</div>
	      						<div class="form-group">
	      							<input type="password" id="login-password" class="form-control" name = "login-password" placeholder="Enter Password" required/>
	      						</div>
	      						<button type="submit" name = "sign-in-btn" id = "sign-in-btn" class="btn-modal">Sign In</button>
	      					</form>

	      					<br>
	      					<br>

	      				</div>
	    			</div>
	    		</div>
	    	</div>
  </div>

<!-- the sign up modal -->

<div class="modal fade" id="modal-reg"  role="dialog">
			<div class="modal-dialog">
	  			<div class="modal-content">
	   				 <div class="modal-header">
	     				<button type="button" class="close" style="width:10px;" data-dismiss="modal">&times;</button>
	      				<h4 class="modal-title">SIGN UP</h4>
	      				<div class="modal-body">
	      				<form method="post" role = "form" class="register-form">
	      						<div class="form-group">
	      							<input type="email" id = "reg-email" class="form-control" name="reg-email" placeholder="Enter Email" required />
                    </div>
                    <div class="form-group">
	      							<input type="text" id = "reg-user" class="form-control" name="reg-user" placeholder="Enter Username" required />
	      						</div>
	      						<div class="form-group">
	      							<input type="password" id="reg-password" class="form-control" name = "reg-password" placeholder="Enter Password" required/>
                    </div>
                    <div class="form-group">
	      							<input type="password" id="reg-con-password" class="form-control" name = "reg-con-password" placeholder="Confirm Password" required/>
	      						</div>
	      						<button type="submit" name = "sign-up-btn" id = "sign-up-btn" class="btn-modal">Sign Up</button>
	      					</form>

	      					<br>
	      					<br>

	      				</div>
	    			</div>
	    		</div>
	    	</div>
  </div>









    <div id = "particles-js">
        
        <div class = "container ">
            
            <div id = "preloader"></div>
            <div class = "row">
                <div class = "col-md-10 col-md-offset-1  main-content-diagnose">
                    <div class = "row phone-model col-md-offset-1 ">
                        <h3><i class="fa fa-mobile" style="padding:10px;" aria-hidden="true"></i>Troubleshooting Tips</h3>
                        <div class = "col-md-9 col-md-offset-1">
                                            <ul class="list-group">
                                     
                        <?php
                                    include "res/tips.php";

                                for($i = 0; $i <= count($questions) - 1; $i++){
                                    $fault_iss = $questions[$i];
                                    if($_POST[$fault_iss] == "1"){
                                        $sql = "SELECT * FROM fault_questions WHERE id = '$fault_iss'";
                                        $result = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_array($result);
                        ?>
                                                <li class="list-group-item" id = "no-<?php echo $fault_iss; ?>"  >
                                                    <?php echo $row['fault'];  ?>
                                                    <span class = "fa fa-caret-down fa-fault"></span>
                                                </li>     
                         <?php
                                  
                                    }
                                    
                                    else{
                                      ?>
                                        <script type="text/javascript">
                                          alert("No fault selected");
                                          window.open('diagnosis.php', '_self')
                                        </script>

                                      <?php
                                    }

                                }
                        ?>
                             </ul>
                                           
                                           
                                           </div>
                    </div>
                </div>
            </div>
        </div>
    
    
    </div>
    
    <script  type = "text/javascript" src="js/particles.js"></script>
    <script type = "text/javascript" src="js/app.js"></script>
    <script type = "text/javascript" src="js/index.js"></script>
    
</body>
</html>