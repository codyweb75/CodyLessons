<?php

include 'CodyUser.php';

class UserRepository {
	public function registerUser($username, $email) {
		// Ici, vous pourriez intégrer une logique de vérification ou d'enregistrement dans une base de données
		return new User($username, $email);
	}
}
?>