<?php
/*------------------------Contact Email------------------------------------------*/

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message1 = $_POST['message'];
            $deadline = $_POST['deadline'];
            $words = $_POST['words'];
            $country = $_POST['country'];

            $headers = "From: team@thesisndissertationhelp.com \r\n";
            $headers .= 'Cc: contact@valueassignmenthelp.com' . " \r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            $message = '<html><body>';
            $message .= '<table border="1" rules="all" style="border-color: #666;  width:100%;" cellpadding="10">';
            $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name. "</td></tr>";
            $message .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
            $message .= "<tr><td><strong>Subject:</strong> </td><td>" . $subject . "</td></tr>";
            $message .= "<tr><td><strong>Country:</strong> </td><td>" . $country . "</td></tr>";
            $message .= "<tr><td><strong>Total Words:</strong> </td><td>" . $words . "</td></tr>";
            $message .= "<tr><td><strong>Deadline:</strong> </td><td>" . date('d-m-Y', strtotime($deadline)) . "</td></tr>";
            $message .= "<tr><td><strong>Message:</strong> </td><td>" . $message1 . "</td></tr>";

            $message .= "</table>";
            $message .= "</body></html>";


            $message = wordwrap($message, 70);
            // send email
            $mail = mail($email, "Contact Form  thesis and dissertation help", $message, $headers);
            echo 1;
            if( $mail){ ?>
                <script>
                    alert("Email has been sent.");
                    window.location.replace("https://thesisndissertationhelp.com");
                </script>
        <?php }else{?>
             <script>
                    alert("Email has Not Try Again sent.");
                    window.location.replace("https://thesisndissertationhelp.com");
            </script>
        <?php }
 } ?>