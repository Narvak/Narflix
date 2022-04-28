<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
		<meta name="author" content="Your Name">
		<meta name="description" content="Example description">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="css/effect.css">
		<link rel="responcive" href="css/media-queries.css">
		<link rel="icon" type="image/x-icon" href="images/logo.svg"/>

    <title>Narflix | Log-in</title>
	</head>

		<script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script language="javascript" type="text/javascript" src="javascript/lib-jquery.js"></script>
		<script language="javascript" type="text/javascript" src="javascript/all-lib_js.js"></script>

<body>



        <a href="index.html">
					<object data="images/logo.svg" type="image/svg+xml" class="logo"></object>
				</a>

    <div class="gen">
      <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>

        <p>C'est votre tableau de bord.</p>

          <a href=".././index.html">
            <button class="zoompa">
              <p>Home</p>
            </button>
          </a>

          <a href=".././about.html">
            <button class="zoompa">
              <p>A propos</p>
            </button>
          </a>

          <a href="logout.php">
            <button class="zoompa">
              Déconnexion
            </button>
          </a>

          <div id="img_profil">
            Les images de Profil.

              <div id="" hidden>
                
              </div>

          </div>

    </div>

		<footer>
			<p><strong>Narflix</strong> 2022</p>
		</footer>


  </body>
</html>