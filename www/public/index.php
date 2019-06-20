<?php
include 'includes/header.php';
require 'includes/function.php';
?>
<section>

	<article>
		<h2 id="aboutme">About me :</h2>
		<img id="photo" src="assets/img/photo_dylan.jpg"><br />

		<p id="aboutmeP">Bonjour et bienvenue sur mon premier site web , je m'appel Tavares Dylan et je suis étudiant
			en developpement web. Mon école, <a href="https://www.aformac.fr/nos-centres/aformac-montlucon">Aformac</a>
			, ce situe dans la ville de montluçon , également ma ville natale. Je me suis intérésser très tôt au domaine
			du developpement informatique, étant joueur de jeux vidéos depuis ma tendre enfance ,
			j'ai toujours eu une attirance pour l'informatique et la programmation. Malheureusement à mon orientation fin
			collège , mes notes de mathématiques n'étant pas au plus haut , je me suis vue refuser tout cursus menant à
			l'informatique. Je me suis donc tourner dans le génie mécanique faute de possibilités d'intégrer une école
			proposant des cours dans le domaine numérique. J'ai pu, durant mes 5 années d'études en tant que technicien
			d'usinage , apprendre à coder dans le langage des machines (Num ISO), la partie du métier qui me plaisais
			le plus. Après mes études , j'ai commencer à travailler dans une grande usine de ma ville.
		</p>

		<h3 id="h3comp">Compétences :</h3>
		<div id="comp">
			<div class="progressbarre blue stripes"><span style="width: 90%">HTML</span></div>
			<div class="progressbarre jaune stripes"><span style="width: 75%">CSS3</span></div>
			<div class="progressbarre rouge stripes"><span style="width: 30%">JS</span></div>
			<div class="progressbarre orange stripes"><span style="width: 60%">PHP</span></div>
			<div class="progressbarre menthe stripes"><span style="width: 85%">GIT</span></div>
			<div class="progressbarre blert stripes"><span style="width: 50%">SQL</span></div>
			<div class="progressbarre violet stripes"><span style="width: 10%">MVC</span></div>
		</div>
	</article>

	<article id="contact">
		<h2 id="h2contact">CONTACT :</h2>

		<div id="logos_contact">
			<a href="https://www.instagram.com/dylan.03100/" target="blank"><img class="logo" src="assets/img/icon-instagram-96.png" alt="Logo Insta" title="Redirection Instagram"></a>

			<a href="https://www.facebook.com/dylan.tavares.9" target="blank"><img class="logo" src="assets/img/icon-facebook-96.png" alt="Logo Facebook" title="Redirection Facebook"></a>

			<a href="https://github.com/TavaresDylan" target="blank"><img class="logo" src="assets/img/icon-github-2-96.png" alt="logo gitub" title="Redirection Github"></a>

			<a href="https://www.linkedin.com/in/dylan-tavar%C3%A8s-727b23187/" target="blank"><img class="logo" src="assets/img/icons8-linkedin-96.png" title="Redirection LinkedIn" alt="logo linkedin"></a>
		</div>

		<div class="googlemaps">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2754.6277923409953!2d2.597728850843378!3d46.337083379018516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f0a7e0c785af01%3A0x636e59b5830e66b6!2s23+Rue+St%C3%A9phane+Servant%2C+03100+Montlu%C3%A7on!5e0!3m2!1sfr!2sfr!4v1561021664918!5m2!1sfr!2sfr" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

		<form method="post" action="" id="formulaire">

			<label for="">Votre e-mail</label>
			<input class="rounded" type="email" name="mailfrom" placeholder="Mail" required="true">

			<label for="">Votre message</label>
			<textarea class="rounded" name="msg" id="textarea" placeholder="Votre message.."></textarea>

			<button id="subBtn" type="submit" name="sub" class="btn btn-outline-danger">Envoyer</button>

		</form>

	</article>

	<article id="ressources">

		<h2>RESSOURCES :</h2>
		<a class="liens_ressources" id="liensdeveloppez.com" href="https://www.developpez.com/">Developpez.com</a>
		<a class="liens_ressources" id="lienmdn" href="https://developer.mozilla.org/fr/">MDN web docs</a>
		<a class="liens_ressources" id="lienhtmlcheat" href="https://htmlcheatsheet.com/">HTML Cheat Sheet</a>

	</article>

</section>

<?php
include 'includes/footer.php';
?>