<?php

include 'CodyUserService.php';

$userRepository = new UserRepository();
$userService = new UserService($userRepository);

$userService->displayUserDetails("john_doe", "john@example.com");
?>