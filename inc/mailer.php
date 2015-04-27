<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $fname = strip_tags(trim($_POST["fname"]));
		$lname = strip_tags(trim($_POST["lname"]));
        $phone = strip_tags(trim($_POST["phone"]));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

        // Check that data was sent to the mailer.
        if ( empty($fname) OR empty($lname) OR empty($phone) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "jessrasemont@rasemontgardens.com";

        // Set the email subject.
        $subject = "New Website Lead: $fname $lname";

        // Build the email content.
        $email_content = "Name: $fname $lname\n";
        $email_content .= "Direct Phone: $phone\n";
        $email_content .= "Email: $email\n";

        // Build the email headers.
        $email_headers = "From: $fname $lname";
        // $cookie_value = $fname;
        // setcookie("studioLeadComplete", $cookie_value, time() + (86400 * 3), "/"); // 86400 = 1 day


        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "<h1>Thank You!</h1> <p>We will be contacting you shortly to assist you.</p>";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "<h1>Oops! Something went wrong</h1> <p>Please call us at <a href='tel:8138174691'>813.817.4691</a></p>";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "<h1>Oops! Something went wrong</h1> <p>Please call us at <a href='tel:8138174691'>813.817.4691</a></p>";
    }

?>