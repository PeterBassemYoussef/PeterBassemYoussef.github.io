<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Perform the subscription process (you can customize this based on your requirements)
	$email = $_POST["email"];

	// Assuming you have a function to process the subscription, you can check its success here
	$subscriptionSuccess = processSubscription($email);

	// Redirect back to the calling page with a success or fail message
	if ($subscriptionSuccess) {
		header("Location: ../?message=success");
	} else {
		header("Location: ../?message=fail");
	}
} else {
	// If someone tries to access this script directly without submitting the form, redirect to the calling page
	header("Location: ../");
}

function processSubscription($email)
{
	date_default_timezone_set('Africa/Cairo');
	@ini_set('display_errors', 0);
	@ini_set('track_errors', 0);

	$subscriptionSuccess = $array['email']	= isset($email) ? ckmail($email) : false;

	if ($array['email'] !== false) {

		$fh = fopen('_newsletter.txt', 'a+');
		fwrite($fh, "\r\n" . $array['email']);
		fclose($fh);

		unset($fh, $array);
	}

	return $subscriptionSuccess;
}

function ckmail($email)
{
	$email = trim(strtolower($email));
	if (preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/', trim($email))) {
		return $email;
	} else {
		return false;
	}
}
