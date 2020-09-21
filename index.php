<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Generator nickname</title>
</head>
<body>
    <h1>Nickname generator for World Of Warcraft</h1>

    <form action="nickname_generator.php" method="post">
    <p>
        <input type="radio" name="class" value="Rogue" id="Rogue">
        <label for="Rogue">Rogue</label>

        <input type="radio" name="class" value="Paladin" id="Paladin">
        <label for="Paladin">Paladin</label>
    </p>

    <p>
        <input type="radio" name="class" value="Monk" id="Monk">
        <label for="Monk">Monk</label>

        <input type="radio" name="class" value="Warrior" id="Warrior">
        <label for="Warrior">Warrior</label>
    </p>

    <p>
        <input type="radio" name="class" value="Death_Knight" id="Death_Knight">
        <label for="Death_Knight">Death Knight</label>

        <input type="radio" name="class" value="Demon_Hunter" id="Demon_Hunter">
        <label for="Demon_Hunter">Demon Hunter</label>
    </p>

    <p>
        <input type="radio" name="class" value="Druid" id="Druid">
        <label for="Druid">Druid</label>

        <input type="radio" name="class" value="Shaman" id="Shaman">
        <label for="Shaman">Shaman</label>
    </p>

    <p>
        <input type="radio" name="class" value="Hunter" id="Hunter">
        <label for="Hunter">Hunter</label>

        <input type="radio" name="class" value="Mage" id="Mage">
        <label for="Mage">Mage</label>
    </p>

    <p>
        <input type="radio" name="class" value="Warlock" id="Warlock">
        <label for="Warlock">Warlock</label>

        <input type="radio" name="class" value="Priest" id="Priest">
        <label for="Priest">Priest</label>
    </p>

        <input type="submit" value="Submit">
    </form>
    
</body>
</html>