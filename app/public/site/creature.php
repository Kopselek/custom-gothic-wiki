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
                var formSerialized = form.serializeArray();

                for (let i = 0; i < formSerialized.length; i++) {
                    if (formSerialized[i]["name"] === "aggressive") {
                        formSerialized.splice(i, 1);
                        break;
                    }
                }

                formSerialized.push({name: "aggressive", value: Boolean($("#aggressive").is(":checked"))});
                jQuery.ajax({
                    type: "POST",
                    url: "../ajax/creatures.ajax.php",
                    data: formSerialized, // serializes the form's elements.
                    success: function (data) {
                        alert("Dodano Creature"); // show response from the php script. (use the developer toolbar console, firefox firebug or chrome inspector console)
                    }
                });
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded',
            function () {
                let drop = document.querySelector('#drop');
                let add_drop = document.querySelector('#add_drop');
                let remove_drop = document.querySelector('#remove_drop');
                let dropNumber = 0

                function addDrop() {
                    if (dropNumber < 10) {
                        let newDrop = document.createElement('div')
                        newDrop.setAttribute('class', 'drop-' + dropNumber)

                        let dropHeader = document.createElement('h3')
                        dropHeader.innerText = 'Item ' + (dropNumber + 1)
                        newDrop.appendChild(dropHeader)

                        //Instance
                        let dropInstanceLabel = document.createElement('label')
                        let dropInstanceInput = document.createElement('input')
                        dropInstanceLabel.setAttribute('for', 'drop-instance')
                        dropInstanceLabel.innerText = 'Instance'
                        dropInstanceInput.setAttribute('type', 'text')
                        dropInstanceInput.setAttribute('name', 'drop[' + dropNumber + '][instance]')
                        newDrop.appendChild(dropInstanceLabel)
                        newDrop.appendChild(dropInstanceInput)

                        //Min
                        let dropMinLabel = document.createElement('label')
                        let dropMinInput = document.createElement('input')
                        dropMinLabel.setAttribute('for', 'drop-min')
                        dropMinLabel.innerText = 'Min'
                        dropMinInput.setAttribute('type', 'number')
                        dropMinInput.setAttribute('name', 'drop[' + dropNumber + '][min]')
                        newDrop.appendChild(dropMinLabel)
                        newDrop.appendChild(dropMinInput)

                        //Max
                        let dropMaxLabel = document.createElement('label')
                        let dropMaxInput = document.createElement('input')
                        dropMaxLabel.setAttribute('for', 'drop-max')
                        dropMaxLabel.innerText = 'Max'
                        dropMaxInput.setAttribute('type', 'number')
                        dropMaxInput.setAttribute('name', 'drop[' + dropNumber + '][max]')
                        newDrop.appendChild(dropMaxLabel)
                        newDrop.appendChild(dropMaxInput)

                        //Chance
                        let dropChanceLabel = document.createElement('label')
                        let dropChanceInput = document.createElement('input')
                        dropChanceLabel.setAttribute('for', 'drop-chance')
                        dropChanceLabel.innerText = 'Chance'
                        dropChanceInput.setAttribute('type', 'number')
                        dropChanceInput.setAttribute('name', 'drop[' + dropNumber + '][chance]')
                        newDrop.appendChild(dropChanceLabel)
                        newDrop.appendChild(dropChanceInput)

                        drop.appendChild(newDrop);
                        dropNumber++
                    } else {
                        alert('Max number of Drop\'s reached.')
                    }
                }

                function removeDrop() {
                    if (dropNumber > 0) {
                        drop.lastChild.remove()
                        dropNumber--
                    } else {
                        alert('You can\'t remove drop wich not exist.')
                    }
                }

                add_drop.addEventListener('click', addDrop);
                remove_drop.addEventListener('click', removeDrop);
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
    <input type="checkbox" name="aggressive" id="aggressive">
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
    <input type="number" name="damage[melee]">
    <label for="meeleweapon-damage">Meele weapon</label>
    <input type="number" name="damage[meleeweapon]">
    <label for="ranged-damage">Ranged weapon</label>
    <input type="number" name="damage[ranged]">
    <label for="magic">Magic</label>
    <input type="number" name="damage[magic]">
    <h2>---------</h2>

        <div id="drop">
            <h2>Drop</h2>
            <button type="button" id="add_drop">+</button>
            <button type="button" id="remove_drop">-</button>


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
    <label for="weapon-meleeweapon">Meele weapon</label>
    <input type="number" name="weapon[meleeweapon]">
    <label for="weapon-armor">Armor</label>
    <input type="number" name="weapon[armor]">
    <label for="weapon-shield">Shield</label>
    <input type="number" name="weapon[shield]">
    <label for="weapon-magic">Magic</label>
    <input type="number" name="weapon[magic]">
    <h2>---------</h2>
    <button type="submit">Create</button>

</form>
</body>

</html>
