<?php

	function signUp(){
			require 'connect.php';

			$username = $_POST['reg-user'];
			$password = $_POST['reg-password'];
			$con_password = $_POST['reg-con-password'];
			$email = $_POST['reg-email'];

			if($password == $con_password){
				$sql = "INSERT INTO users (username, email, password, RegDate)
			VALUES ( '$username','$email', '$password', now()) ";
				$result = mysqli_query($conn, $sql);

			if($result){
					$_SESSION["register"] = true;
						}
				else{
					echo "<script>alert('Unsuccessful Registration')</script>";

				}


			}else{
					?>
					<script type="text/javascript">
						document.getElementById('imageHelp').innerHTML = 'Password Does not match';
						document.getElementById('imageHelp').style.color = 'red';
					</script>
				<?php

			}


		}

function signIn(){

			require 'connect.php';
			$username =  mysqli_real_escape_string($conn, $_POST['login-user']);
			$password = mysqli_real_escape_string($conn, $_POST['login-password']);

				$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";

				$result = mysqli_query($conn, $sql);
				$check_user = mysqli_num_rows($result);

				if($check_user > 0){
					$row = mysqli_fetch_array($result);
					$_SESSION['login-status'] = true;
					$_SESSION['register'] = false;

					$_SESSION['username'] = $row["username"];
					$_SESSION['email'] = $row["email"];
					$_SESSION['id'] = $row["id"];
						}
				else{

					$_SESSION['login-status'] = false;

					?>
						
						<script type = 'text/javascript'>
							alert("Invalid Email or Password");
							// document.getElementById('alert').style.display = 'block';
		    			// 	document.getElementById('alert').innerHTML = 'Invalid Email or Password, Try Again';
						</script>
					<?php
				}
		}

function logOut(){
				session_destroy();
				header('location: index.php');

		}

?>
