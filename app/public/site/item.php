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
        jQuery(document).on('submit', function(e) {
            let form = jQuery(e.target);
            if (form.is("#itemsForm")) { // check if this is the form that you want (delete this check to apply this to all forms)
                e.preventDefault();
                let formSerialized = form.serializeArray();

                jQuery.ajax({
                    type: "POST",
                    url: "../ajax/items.ajax.php",
                    data: formSerialized, // serializes the form's elements.
                    success: function(data) {
                        alert("Dodano Item"); // show response from the php script. (use the developer toolbar console, firefox firebug or chrome inspector console)
                    }
                });
            }
        });
    </script>
</head>

<body>

    <form id="itemsForm">
        <label for="type">Type</label>
        <input type="text" name="type">
        <label for="mode">Mode</label>
        <input type="text" name="mode">
        <label for="instance">Instance</label>
        <input type="text" name="instance">
        <label for="texture">Texture</label>
        <input type="text" name="texture">
        <label for="level">Level</label>
        <input type="number" name="level">
        <label for="price">Price</label>
        <input type="number" name="price">
        <label for="crystalslots">Crystal Slots</label>
        <input type="number" name="crystalslots">
        <label for="strength">Strength</label>
        <input type="number" name="strength">
        <label for="dexterity">Dexterity</label>
        <input type="number" name="dexterity">
        <label for="inteligence">Inteligence</label>
        <input type="number" name="inteligence">
        <label for="equiplevel">Equip Level</label>
        <input type="number" name="equiplevel">
        <h2>---------</h2>
        <h2>Damage</h2>
        <h2>---------</h2>
        <label for="damage_incisors">Damage Incisors</label>
        <input type="number" name="damage_incisors">
        <label for="damage_hammer">Damage Hammer</label>
        <input type="number" name="damage_hammer">
        <label for="damage_stab">Damage Stab</label>
        <input type="number" name="damage_stab">
        <label for="damage_element">Damage Element</label>
        <input type="number" name="damage_element">
        <label for="damage_magic">Damage Magic</label>
        <input type="number" name="damage_magic">
        <h2>---------</h2>
        <h2>Effect</h2>
        <h2>---------</h2>
        <label for="effect_mode">Effect Mode</label>
        <input type="number" name="effect_mode">
        <label for="effect_type">Effect Type</label>
        <input type="text" name="effect_type">
        <label for="effect_value">Effect Value</label>
        <input type="number" name="effect_value">
        <label for="effect_time">Effect Time</label>
        <input type="number" name="effect_time">
        <h2>---------</h2>
        <h2>Bonuses</h2>
        <h2>---------</h2>
        <label for="bonusstrength_mode">Bonus Strength Mode</label>
        <input type="number" name="bonusstrength_mode">
        <label for="bonusstrength_value">Bonus Strength Value</label>
        <input type="number" name="bonusstrength_value">
        <label for="bonusdexterity_mode">Bonus Dexterity Mode</label>
        <input type="number" name="bonusdexterity_mode">
        <label for="bonusdexterity_value">Bonus Dexterity Value</label>
        <input type="number" name="bonusdexterity_value">
        <label for="bonusinteligence_mode">Bonus Inteligence Mode</label>
        <input type="number" name="bonusinteligence_mode">
        <label for="bonusinteligence_value">Bonus Inteligence Value</label>
        <input type="number" name="bonusinteligence_value">
        <label for="damagemonsterbonus_mode">Damage Monster Bonus Mode</label>
        <input type="number" name="damagemonsterbonus_mode">
        <label for="damagemonsterbonus_value">Damage Monster Bonus Value</label>
        <input type="number" name="damagemonsterbonus_value">
        <label for="damagemonsterbonus_type">Damage Monster Bonus Type</label>
        <input type="text" name="damagemonsterbonus_type">
        <h2>---------</h2>
        <h2>Name</h2>
        <h2>---------</h2>
        <label for="name_pl">Name Polish</label>
        <input type="text" name="name_pl">
        <label for="name_eng">Name English</label>
        <input type="text" name="name_eng">
        <h2>---------</h2>
        <button type="submit">Create</button>
    </form>
</body>

</html>