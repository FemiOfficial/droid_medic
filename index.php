<?php
include_once "res/connect.php";

include_once "res/header.php";

?>

    <div id = "particles">
        
        <div class = "container ">
            
            <div id = "preloader"></div>
            

            <div class = "row">
            <?php
                if(isset($_SESSION["register"]) && $_SESSION["register"] == true){
                    
                        ?>
            <div class = "alert alert-success fade in alert-dismissable">          
                    <strong>Registration Successful</strong> Click <strong>SIGN IN</strong> to Proceed...        
                <a href="#" class = "close" data-dismiss = "alert" aria-label="close">&times;</a>
            </div>
            <?php
                    }
                ?>
                <div class = "col-md-10 col-md-offset-1  main-content" >
                    <p class = "content-text">
                        <h1 style=" color: #80c152;font-weight: 900;font-size: 40px;"> DroidMedic</h1>
                        <span class = "hint" style="color: #fff;font-size: 18px;">Expert System for Troubleshooting <span style = "color: #fff;font-weight:bold; background: #80c152; padding: 5px;">Android</span> Phones</span><br><br>
                        <?php
                            if(isset($_SESSION["login-status"])){
                        ?>
                        <button class = "btn-lg btn-danger btn-start"  onclick = "window.open('main.php', '_self')"><span style="font-weight: bold;">Click</span> & Begin <span style="font-weight: 1000;">Diagnosis</span></button>
                        <?php
                            }else{
                        ?>
                        <button class = "btn-lg btn-danger btn-start" data-toggle ="modal" data-target="#warning"><span style="font-weight: 1000;">Click</span> & Begin <span style="font-weight: 1000;">Diagnosis</span></button>
                        <?php
                            }
                        ?>
                    </p>
                </div>
            </div>
                        </div>
    </div>


<!-- the sign up modal -->

<div class="modal fade" id="warning"  role="dialog">
			<div class="modal-dialog">
	  			<div class="modal-content">
	   				 <div class="modal-header">
	     				<button type="button" class="close" style="width:10px;" data-dismiss="modal">&times;</button>
	      				<h4 class="modal-title">SECURITY ALERT</h4>
	      				<div class="modal-body">
                            Please Sign-In before Diagnosis!

	      				</div>
	    			</div>
	    		</div>
	    	</div>
  </div>

   <?php
        include_once "res/footer.php";        
    ?>
    <!-- Scipts for js -->
    
    <script  type = "text/javascript" src="js/particles.js"></script>
    <script type = "text/javascript" src="js/app.js"></script>
    
</body>
</html>