
<?php
    if(array_key_exists('submit-btn', $_POST)) {
            myFunction();
        }
        function myFunction(){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $select = $_POST['select']; 

            echo "Dear Mr $name <br><br> We have received your $select on the $subject.
            We will contact you as soon <br> as possible at $email.<br> Kind regards, <br><br> H.T.P. Harold
            <br><br><img class='harold-img' alt='harold-foto' src='img/Harold.png'>" ;

        }
    ?>