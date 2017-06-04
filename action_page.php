<html>
<body>

Welcome <?= $_POST["name"]; ?><br>
Your problem to solve is: <?= $_POST["problem"]; ?> <br>
Your email address is: <?= $_POST["email"]; ?> <br>

Your full problem description is: <?= $_POST["text"]; ?> <br>

<?
$message =
    "name: ". $_POST["name"].
    "; problem: ". $_POST["problem"].
    "; email: ". $_POST["email"].
    "; text: ". $_POST["text"];


mail ( "annamuljar9@gmail.com", "To Irene about my problems" , $message);
?>
</body>
</html>