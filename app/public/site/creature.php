<?php

?>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        jQuery(document).on('submit', function (e) {
            let form = jQuery(e.target);
            if (form.is("#creaturesForm")) { // check if this is the form that you want (delete this check to apply this to all forms)
                e.preventDefault();
                jQuery.ajax({
                    type: "POST",
                    url: "../ajax/creatures.ajax.php",
                    data: form.serializeArray(), // serializes the form's elements.
                    success: function (data) {
                        alert(data); // show response from the php script. (use the developer toolbar console, firefox firebug or chrome inspector console)
                    }
                });
            }
        });
    </script>
</head>
<body>

<form id="creaturesForm">
    <label for="index">Index</label>
    <input type="text" name="index">
    <label for="level">Level</label>
    <input type="number" name="level">
    <h2>---------</h2>
    <h2>Name</h2>
    <label for="name-polish">Polish</label>
    <input type="text" name="name[polish]">
    <label for="name-english">English</label>
    <input type="text" name="name[english]">
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
    <input type="number" name="damage[meele]">
    <label for="meeleweapon-damage">Meele weapon</label>
    <input type="number" name="damage[meeleweapon]">
    <label for="ranged-damage">Ranged weapon</label>
    <input type="number" name="damage[ranged]">
    <label for="magic">Magic</label>
    <input type="number" name="damage[magic]">
    <h2>---------</h2>

    <div id="drop">
        <h2>Drop</h2>
        <button type="button">+</button>
        <button type="button">-</button>
        <div class="drop-1">
            <h3>Item 1</h3>
            <label for="drop-instance">Instance</label>
            <input type="text" name="drop[1][instance]">
            <label for="drop-min">Min</label>
            <input type="number" name="drop[1][min]">
            <label for="drop-max">Max</label>
            <input type="number" name="drop[1][max]">
            <label for="drop-chance">Chance</label>
            <input type="number" name="drop[1][chance]">
        </div>

        <div class="drop-2" hidden>
            <h3>Item 2</h3>
            <label for="drop-instance">Instance</label>
            <input type="text" name="drop[2][instance]">
            <label for="drop-min">Min</label>
            <input type="number" name="drop[2][min]">
            <label for="drop-max">Max</label>
            <input type="number" name="drop[2][max]">
            <label for="drop-chance">Chance</label>
            <input type="number" name="drop[2][chance]">
        </div>

        <div class="drop-3" hidden>
            <h3>Item 3</h3>
            <label for="drop-instance">Instance</label>
            <input type="text" name="drop[3][instance]">
            <label for="drop-min">Min</label>
            <input type="number" name="drop[3][min]">
            <label for="drop-max">Max</label>
            <input type="number" name="drop[3][max]">
            <label for="drop-chance">Chance</label>
            <input type="number" name="drop[3][chance]">
        </div>

        <div class="drop-4" hidden>
            <h3>Item 4</h3>
            <label for="drop-instance">Instance</label>
            <input type="text" name="drop[4][instance]">
            <label for="drop-min">Min</label>
            <input type="number" name="drop[4][min]">
            <label for="drop-max">Max</label>
            <input type="number" name="drop[4][max]">
            <label for="drop-chance">Chance</label>
            <input type="number" name="drop[4][chance]">
        </div>

        <div class="drop-5" hidden>
            <h3>Item 5</h3>
            <label for="drop-instance">Instance</label>
            <input type="text" name="drop[5][instance]">
            <label for="drop-min">Min</label>
            <input type="number" name="drop[5][min]">
            <label for="drop-max">Max</label>
            <input type="number" name="drop[5][max]">
            <label for="drop-chance">Chance</label>
            <input type="number" name="drop[5][chance]">
        </div>


    </div>
    <h2>---------</h2>
    <h2>Protection</h2>
    <label for="protection-edge">Edge</label>
    <input type="text" name="protection[edge]">
    <label for="protection-blunt">Blunt</label>
    <input type="number" name="protection[blunt]">
    <label for="protection-point">Point</label>
    <input type="number" name="protection[point]">
    <label for="protection-fire">Fire</label>
    <input type="number" name="protection[fire]">
    <label for="protection-magic">Magic</label>
    <input type="number" name="protection[magic]">
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
    <input type="number" name="weapon[meeleweapon]">
    <label for="weapon-armor">Armor</label>
    <input type="number" name="weapon[armor]">
    <label for="weapon-shield">Shield</label>
    <input type="number" name="weapon[shield]">
    <label for="weapon-magic">Magic</label>
    <input type="number" name="weapon[magic]">
    <h2>---------</h2>
    <h2>Visual</h2>
    <label for="visual-bodymodel">Body model</label>
    <input type="number" name="visual[bodymodel]">
    <label for="visual-bodytexture">Body texture</label>
    <input type="number" name="visual[bodytexture]">
    <label for="visual-headmodel">Head model</label>
    <input type="number" name="visual[headmodel]">
    <label for="visual-headtexture">Head texture</label>
    <input type="number" name="visual[headtexture]">
    <h2>---------</h2>
    <button type="submit">Create</button>

</form>
</body>

</html>
