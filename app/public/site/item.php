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
        <button type="submit">Create</button>

    </form>
</body>

</html>