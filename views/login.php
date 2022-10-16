<?php
session_start();
if(isset($_SESSION['user'])){
    header('location:./accueil.php');
}elseif(isset($_SESSION['partenaire'])){
    header('location:./dash.php');
}
include "../cadre/header.php";
if(isset($_POST["submit"])){
	$login=$_POST["login"];
	$password=$_POST["password"];
	if(!empty($login) && !empty($password)){
		include("../database/db.php");
		$req="Select * from user where email='$login' and password='$password'";
		$res=$connexion->prepare($req);
		$res->execute();
		// echo($res->rowCount());
		if($res->rowCount()>=1){
			session_start();
			$_SESSION["user"]=$res->fetch();
			header("location:./accueil.php");
		}
	}
}
if(isset($_POST["submit2"])){
	$login=$_POST["login"];
	$password=$_POST["password"];
	if(!empty($login) && !empty($password)){
		include("../database/db.php");
		$req="Select * from partenaire where email='$login' and password='$password'";
		$res=$connexion->prepare($req);
		$res->execute();
		// echo($res->rowCount());
		if($res->rowCount()>=1){
			session_start();
			$_SESSION["partenaire"]=$res->fetch();
			header("location:./dash.php");
		}
	}
}
?>

	<div class="main">
		<div class="card">
			<div class="card-title">
				<h3><i class="fa fa-user-circle" aria-hidden="true"></i> Bonjour <span id="action_title">Utilisateur</span></h3>
			</div>
			<div class="card-body">
				<div class="card-body-top">
					<button id="login" class="btn" name="login" onclick="login()">Utilisateur</button>
					<button id="login_part" class="btn" name="login_part" onclick="login_part()">Partenaire</button>
					<div id="pointer-btn"></div>
				</div>
				<div class="card-body-login" >
					<form id="login-form"  action=""  method="post">
						<input class="input-form" type="email" placeholder="Email" name="login" required><br><br>
						<input class="input-form" type="password" placeholder="Mot de passe" name="password"  required><br><br><br>
						<input class="submit-form" type="submit" value="Connexion" name="submit">
					</form>
					<form id="login_part-form"  action="" method="post">
						<input class="input-form" type="email" placeholder="Email" name="login"  required><br><br>
						<input class="input-form" type="password" placeholder="Mot de passe" name="password"  required><br><br>
						<input class="submit-form" type="submit" value="Connexion" name="submit2">
					</form>
				</div>
			</div>
		</div>
	</div>
        <script>
			var x = document.getElementById("login-form");
			var y = document.getElementById("login_part-form");
			var z = document.getElementById("pointer-btn");
			var l = document.getElementById("login");
			var r = document.getElementById("login_part");
			var ac = document.getElementById("action_title");

			function login_part(){
				x.style.left = "-450px";
				y.style.left = "25px";
				z.style.left = "215px";
				l.style.color = "#848484";
				r.style.color = "#fff";
				ac.textContent = "Partenaire";
			}

			function login(){
				x.style.left = "25px";
				y.style.left = "450px";
				z.style.left = "30px";
				l.style.color = "#fff";
				r.style.color = "#848484";
				ac.textContent = "Utilisateur";
			}
		</script>
		<?php
include "../cadre/footer.php";
?>