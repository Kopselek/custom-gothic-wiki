<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World </title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>

<form action="./Ajax/creatures.ajax.php" iname
"creaturesForm" method="POST">
<label for="index">Index</label>
<input type="text" name="index">
<label for="level">Level</label>
<input type="number" name="level">
<h2>---------</h2>
<h2>Name</h2>
<label for="name-polish">Polish</label>
<input type="text" name="name-polish">
<label for="name-english">English</label>
<input type="text" name="name-english">
<h2>---------</h2>
<label for="instance">Instance</label>
<input type="text" name="instance">
<label for="type">Type</label>
<input type="text" name="type">
<label for="aggressive">Aggressive</label>
<input type="checkbox" name="aggressive">
<label for="health">Health</label>
<input type="number" name="health">
<label for="mana">Mana</label>
<input type="number" name="mana">
<label for="strength">Strength</label>
<input type="number" name="strength">
<label for="magiclevel">Magic Level</label>
<input type="number" name="magiclevel">
<label for="dexterity">Dexterity</label>
<input type="number" name="dexterity">
<label for="experience">Experience</label>
<input type="number" name="experience">
<h2>---------</h2>
<h2>Damage</h2>
<label for="meele-damage">Meele</label>
<input type="number" name="meele-damage">
<label for="meeleweapon-damage">Meele weapon</label>
<input type="number" name="meeleweapon-damage">
<label for="ranged-damage">Ranged weapon</label>
<input type="number" name="ranged-damage">
<label for="magic">Magic</label>
<input type="number" name="magic">
<h2>---------</h2>
<h2>Drop</h2>
<label for="drop-instance">Instance</label>
<input type="text" name="drop-instance">
<label for="drop-min">Min</label>
<input type="number" name="drop-min">
<label for="drop-max">Max</label>
<input type="number" name="drop-max">
<label for="drop-chance">Chance</label>
<input type="number" name="drop-chance">
<h2>---------</h2>
<h2>Protection</h2>
<label for="protection-edge">Edge</label>
<input type="text" name="protection-edge">
<label for="protection-blunt">Blunt</label>
<input type="number" name="protection-blunt">
<label for="protection-point">Point</label>
<input type="number" name="protection-point">
<label for="protection-fire">Fire</label>
<input type="number" name="protection-fire">
<label for="protection-magic">Magic</label>
<input type="number" name="protection-magic">
<h2>---------</h2>
<label for="mindistance">Min distance</label>
<input type="number" name="mindistance">
<label for="maxdistance">Max distance</label>
<input type="number" name="maxdistance">
<label for="bonusdistance">Bonus distance</label>
<input type="number" name="bonusdistance">
<label for="respawn">Respawn</label>
<input type="number" name="respawn">
<h2>---------</h2>
<h2>Weapon</h2>
<label for="weapon-meeleweapon">Meele weapon</label>
<input type="number" name="weapon-meeleweapon">
<label for="weapon-armor">Armor</label>
<input type="number" name="weapon-armor">
<label for="weapon-shield">Shield</label>
<input type="number" name="weapon-shield">
<label for="weapon-magic">Magic</label>
<input type="number" name="weapon-magic">
<h2>---------</h2>
<h2>Visual</h2>
<label for="visual-bodymodel">Body model</label>
<input type="number" name="visual-bodymodel">
<label for="visual-bodytexture">Body texture</label>
<input type="number" name="visual-bodytexture">
<label for="visual-headmodel">Head model</label>
<input type="number" name="visual-headmodel">
<label for="visual-headtexture">Head texture</label>
<input type="number" name="visual-headtexture">
<h2>---------</h2>
<button type="submit">Create</button>

</form>

<script type="text/javascript">
    $("#creaturesForm").requestSubmit(function (e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        let form = $(this);
        let actionUrl = form.attr('action');

        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(), // serializes the form's elements.
            success: function (data) {
                console.log(data); // show response from the php script.
            }
        });

    });
</script>
</body>

</html>