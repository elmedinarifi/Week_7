<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>Contact!</title>
    <link rel="stylesheet" href="kmd.css">
</head>
<body>
    <div class="container-contact">
        <header>
            <div class="row-1 container-a">
                <div class="item-a">
                    <img alt="kommaardoor" src="img/favicon.png" style="max-height: 8vh;">
                    <h4 class="rodeHeader">Kom maar door!</h4>
                </div>
                <div class="item-b">
                    <a href="kommaardoor.php"><h4>Home</h4></a>
                </div>
                <div class="item-c">
                    <a href=""><h4>Products</h4></a>
                </div>
                <div class="item-d">
                    <a href="contactpagina.php"><h4>Contact</h4></a>
                </div>
            </div>
        </header>
        <div class="row-2 contact-pagina-row">
            <form action="succes.php" method="POST">
                <h3 class="rodeHeader">Contact!</h3>
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
                    <input type="radio" name="receive-letter" id="yes" value="yes">
                    <label for="yes">Yes</label>
                    <input type="radio" name="receive-letter" id="no" value="no">
                    <label for="no">No</label><br>
                    <input class="contactpagina-btn" type="submit" name="submit-btn" value="Send!">
            </form>
        </div>
        <footer>
            <div class="row-5 container-footer">
                <div>
                    <h3>Contact us!</h3>
                    <ul>
                        <li>Hoi</li>
                        <li>Hoi</li>
                        <li>Hoi</li>
                    </ul>
                </div>
                <div>
                    <h3>About us!</h3>
                    <ul>
                        <li>Hoi</li>
                        <li>Hoi</li>
                        <li>Hoi</li>
                    </ul>
                </div>
                <div>
                    <h3>Legal</h3>
                    <ul>
                        <li>Hoi</li>
                        <li>Hoi</li>
                        <li>Hoi</li>
                    </ul>
                </div>
            </div>
        </footer>
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