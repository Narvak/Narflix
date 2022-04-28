<?php

// Session
function session() {
    if (!isset($_SESSION["username"]) > 0) {
        // Initialiser la session
        session_start();
        // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
        if(!isset($_SESSION["username"])){
            header("Location: login.php");
            exit(); 
        }
    } elseif (!isset($_SESSION["username"]) == 0) {
        echo"ERROR | we are sorry";
            header("Location: login.php");
            exit(); 
    }
}
session();


//PSEUDO CODE :

//même chose que la page index.html mais en php ()

//algo = Une chance sur 9 le tout multiplié par le nombre d'écoute sur la plateforme (x). (1/9)*x

//header
    //header avec caroussel
        //caroussel en arierre plans
            //5s par images dans le caroussel
                //varriable sur le caroussel en fonction de chaque utilisateur

//id="narflix"
    //fond en degradé de #000000 à #404040
        //texte
            /*
            H1 :
            	Regardez vos films, séries, BD, mangas préférées gratuitement et sans pub sur <br />
				Le vrai, <strong>le magnifique,</strong> l'unique, <strong>le fabuleux,</strong> l'exceptionnel : <br />
				<strong>Narflix</strong>
            
            P :
            	Ce site a été créé par un pa$$ionné. <br />
				Ce qui fait que ce site est une pépite de pai$$on et de tryhard. <br />
				Le tryhard, la pa$$ion, et la gratuité sont les principals qualités de <strong>Narflix</strong>. <br />
				La passion avant tout, tout de même. <br />
            */

//id="intro"
    //algo v1.0.0


//footer
    /*
        <p>
            <strong>Narflix</strong> 2022 <br />
            <strong>V 1.9.0</strong> <br />
                <a href="https://github.com/Narvak/Narflix" target="_blank">Le repo github</a> / <a href="http://" target="_blank"></a> / <a href="http://" target="_blank"></a> <br />
                <a href="http://" target="_blank"></a> / <a href="http://" target="_blank"></a> / <a href="http://" target="_blank"></a> <br />
        </p>
    */




?>