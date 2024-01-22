<?php
	session_start();
	unset($_SESSION['UserID']);
	unset($_SESSION['UserEmail']);
	unset($_SESSION['UserEmail']);
	unset($_SESSION);
	session_destroy();
	header("Location: ../View/index.php?sessao=1");
?>