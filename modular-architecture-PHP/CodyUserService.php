<?php

include 'CodyUserRepository.php';

class UserService {
	private $userRepository;

	public function __construct(UserRepository $userRepository) {
		$this->userRepository = $userRepository;
	}

	public function displayUserDetails($username, $email) {
		$user = $this->userRepository->registerUser($username, $email);
		echo "Username: " . $user->getUsername() . "\n";
		echo "Email: " . $user->getEmail() . "\n";
	}
}
?>
