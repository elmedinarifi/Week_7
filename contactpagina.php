<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact!</title>
    <link rel="stylesheet" href="kmd.css"/>
</head>
<body>
    <div class="container-contact-pagina">    
        <form action="succes.php" method="POST">
            <h3 style="color: red;">Contact!</h3>
            <label>Naam</label>
            <input name="name" type="text" placeholder="Type hier je naam!"><br>
            <label>E-mail</label>
            <input name="email" type="email" placeholder="Type hier je e-mail!"><br>
            <label>Subject</label>
            <input name="subject" type="text" placeholder="Type hier de onderwerp"><br>
            <label>Type</label>
            <select name="select">
                <option value="">Please select an option!</option>
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
            </select><br>
            <label>Message</label>
            <textarea name="message-textarea" rows="3" cols="40"></textarea><br>
            <label>Do you want to receive our newsletter?</label>
                <input type="radio" name="receive-letter" id="yes" value="yes"/>
                <label for="yes">Yes</label>
                <input type="radio" name="receive-letter" id="no" value="no"/>
                <label for="no">No</label><br>
                <input style="background-color: red; padding: 10px;" type="submit" name="submit-btn" value="Send!"/>
        </form>
    </div>
    <?php
        if(array_key_exists('submit-btn', $_POST)) {
            myFunction();
        }
        function myFunction(){
            header("Location: http://localhost/webdev/Week_7/succes.php");
            exit();
        }
    ?>
</body>
</html>