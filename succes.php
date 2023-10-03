<!DOCTYPE html>
<html lang="en">
<head>
    <title>Succes!</title>
</head>
<body>
    <div class="container-succes">
        <h3>Succes</h3>
    </div>
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
            <br><br><img alt='harold-foto' src='img/Harold.png'/>" ;

        }
    ?>
</body>
</html>