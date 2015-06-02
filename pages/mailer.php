<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="mailer.css">
       
        <script src="jquery.min.js"></script>
        <script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
    </head>
    <body>
        <form action="postmail.php" method="post" name="form1" id="form1">
            <fieldset>
                <legend>Contact</legend>
                <label for="name1">Nom: <br>
                    <input type="text" name="Nom" id="name1" required>
                </label>
                <label for="subject">Objet: <br>
                    <input type="text" name="Objet" id="objet" required>
                </label>
                <label for="email1">Email: <br>
                    <input type="email" name="Email" id="email1" required>
                </label>
                <label for="message">Message: <br>
                    <textarea name="Message" id="message" rows=5 required></textarea>
                </label>
                <input type="submit" name="Submit" id="Submit" value="Envoyer">
            </fieldset>
        </form>
        <script>
            $("#form1").validator({
                position: 'bottom left',
                offset: [2, 2]
            });
        </script>
    </body>
</html>