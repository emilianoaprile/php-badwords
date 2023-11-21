<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
</head>

<body>

    <h1>Censura una parola</h1>
    <p>Inserisci una Bad Word e un testo in cui censurarla &DownArrow;</p>

    <form action="bonusResult.php" method="POST">
        <div>
            <input type="text" name="bad_word" placeholder="Inerisci la parola">
        </div>
        <textarea name="user_text" id="" cols="30" rows="10" placeholder="Inserisci il testo"></textarea>
        <input type="submit" value="Invia">
    </form>

</body>

</html>