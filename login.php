<?php
	header('Location: Test.html')
	session_start();


	if(isset($_POST['login'])){
		//connection CHANGE THIS FOR PRODUCTION
		$conn = new mysqli('localhost', 'root', 'teamyellow', 'coffeeshop');

		//set login attempt if not set
		if(!isset($_SESSION['attempt'])){
			$_SESSION['attempt'] = 0;
		}

		//check if there are 3 attempts already
		if($_SESSION['attempt'] == 3){
			$_SESSION['error'] = 'Attempt limit reach';
		}
		else{
			
			$sql = "SELECT * FROM accounts WHERE username = '".$_POST['username']."'";
			$query = $conn->query($sql);
			if($query->num_rows > 0){
				$row = $query->fetch_assoc();
				//verify password - Passwords BCRYPT 10 rounds
				if(password_verify($_POST['password'], $row['password'])){
					//action after a successful login
					$_SESSION['name'] = $_POST['username'];
					
					$_SESSION['success'] = 'Welcome ' . $_SESSION['name'] . '!';
					//unset our attempt
					unset($_SESSION['attempt']);
				}
				else{
					$_SESSION['error'] = 'Password incorrect';
					
					$_SESSION['attempt'] += 1;
					
					if($_SESSION['attempt'] == 3){
						$_SESSION['attempt_again'] = time() + (15*60);
						
					}
				}
			}
			else{
				$_SESSION['error'] = 'No account with that username';
			}

		}

	}
	else{
		$_SESSION['error'] = 'Fill up login form first';
	}

	header('location: index.php');

?>
