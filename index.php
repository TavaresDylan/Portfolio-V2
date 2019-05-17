<?php
include 'includes/header.php';
require 'includes/function.php';
?>
			<section>

				<article>
					<h2 id="aboutme">About me :</h2>
						<img id="photo" src="assets/img/photo_dylan.jpg"><br/>
						<p id="aboutmeP">Bonjour et bienvenue sur mon premier site web , je m'appel Tavares Dylan et je suis étudiant en developpement web. Mon école, Aformac , ce situe dans la ville de montluçon , également ma ville natale. Je me suis intérésser très tôt au domaine du developpement informatique, étant joueur de jeux vidéos depuis ma tendre enfance , j'ai toujours eu une attirance pour l'informatique et la programmation. Malheureusement à mon orientation fin collège , mes notes de mathématiques n'étant pas au plus haut , je me suis vue refuser tout cursus menant à l'informatique. Je me suis donc tourner dans le génie mécanique faute de possibilités d'intégrer une école proposant des cours dans le domaine numérique. J'ai pu, durant mes 5 années d'études en tant que technicien d'usinage , apprendre à coder dans le langage des machines (Num ISO), la partie du métier qui me plaisais le plus. Après mes études , j'ai commencer à travailler dans une grande usine de ma ville.
						</p>

						<h3 id="h3comp">Compétences :</h3>
							<div id="comp">
								<div class="progressbarre blue stripes"><span style="width: 90%">HTML</span></div>
								<div class="progressbarre jaune stripes"><span style="width: 70%">CSS3</span></div>
								<div class="progressbarre rouge stripes"><span style="width: 20%">JS</span></div>
								<div class="progressbarre orange stripes"><span style="width: 40%">PHP</span></div>
								<div class="progressbarre menthe stripes"><span style="width: 85%">GIT</span></div>
							</div>			
				</article>

				<article id="contact">
					<h2 id="h2contact">CONTACT :</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<div id="logos_contact">
						<a href="https://www.instagram.com/dylan.03100/" target="blank"><img id="logoinsta"src="assets/img/instalogo.png" alt="Logo Insta"title="Redirection Instagram"></a>

						<a href="https://www.facebook.com/dylan.tavares.9" target="blank"><img id="logofacebook" src="assets/img/facebook.png" alt="Logo Facebook" title="Redirection Facebook"></a>

						<a href="https://github.com/TavaresDylan" target="blank"><img id="logogithub"src="assets/img/Giticon.png" alt="logo gitub" title="Redirection Github"></a>
					</div>

					<form method="post" action="" id="formulaire">

						<input class="rounded" type="email" name="mailfrom" placeholder="Mail" required="true">

						<textarea class="rounded" name="msg" id="textarea" placeholder="Votre message.."></textarea>

						<button id="subBtn" type="submit" name="sub" class="btn btn-outline-danger">Envoyer</button>

					</form>

				</article>

				<article id="ressources">

					<h2>RESSOURCES :</h2>
						<a class="liens_ressources" id="liensdeveloppez.com"href="https://www.developpez.com/">Developpez.com</a>
						<a class="liens_ressources" id="lienmdn"href="https://developer.mozilla.org/fr/">MDN web docs</a>
						<a class="liens_ressources" id="lienhtmlcheat" href="https://htmlcheatsheet.com/">HTML Cheat Sheet</a>

				</article>

			</section>
<?php
include 'includes/footer.php';
?>