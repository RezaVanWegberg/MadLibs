<?php
    $error = [];

    if ($_SERVER['REQUEST_METHOD'] == "POST"){


        foreach($_POST as $key => $value){
            if (!$value) {
                $error[$key] = "$key is niet ingevuld";
            } else {
                $_POST[$key] = test_input($value);
            }
        };
    } else {
    };


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="MadLibs.css">
    <title>Er heerst paniek...</title>
</head>

    <body>

    <h1>Mad Libs</h1>
    
    <div class="nav-bar">
    <a href="Er-heerst-paniek.php">Er heerst paniek...</a>
    <a href="Onkunde.php">Onkunde</a>
    </div>

    <div class="container">

    <h2>Er heerst paniek...</h2>

    <?php  if ($_SERVER['REQUEST_METHOD'] == "GET" || !empty($error)) { ?>
            
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <div class="vraag">
                <label for="welk-dier">Welk dier zou je nooit als huisdier willen hebben? </label>
                <input type="text" name="welk-dier" id="welk-dier" value="<?php echo isset($_POST['welk-dier']) ? $_POST['welk-dier'] : '' ?>">
                <!-- <span style="color:red">*</span> -->
                <br>
                <?php if(array_key_exists("welk-dier", $error)){ ?>
                    <br>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </div>

        <div class="vraag">
                <label for="belangrijkste-persoon">Wie is de belangrijkste persoon in je leven? </label>
                <input type="text" name="belangrijkste-persoon" id="belangrijkste-persoon" value="<?php echo isset($_POST['belangrijkste-persoon']) ? $_POST['belangrijkste-persoon'] : '' ?>">
                <!-- <span style="color:red">*</span> -->
                <br>
                <?php if(array_key_exists("belangrijkste-persoon", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </div>

        <div class="vraag">
                <label for="welk-land">In welk land zou je graag willen wonen? </label>
                <input type="text" name="welk-land" id="welk-land" value="<?php echo isset($_POST['welk-land']) ? $_POST['welk-land'] : '' ?>">
                <!-- <span style="color:red">*</span> -->
                <br>
                <?php if(array_key_exists("welk-land", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </div>

        <div class="vraag">
                <label for="verveelt">Wat doe je als je je verveelt? </label>
                <input type="text" name="verveelt" id="verveelt" value="<?php echo isset($_POST['verveelt']) ? $_POST['verveelt'] : '' ?>">
                <!-- <span style="color:red">*</span> -->
                <br>
                <?php if(array_key_exists("verveelt", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </div>

        <div class="vraag">
                <label for="speelgoed">Met welk speelgoed speelde je als kind het meest? </label>
                <input type="text" name="speelgoed" id="speelgoed" value="<?php echo isset($_POST['speelgoed']) ? $_POST['speelgoed'] : '' ?>">
                <!-- <span style="color:red">*</span> -->
                <br>
                <?php if(array_key_exists("speelgoed", $error)){ ?>
                    <br>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </div>

        <div class="vraag">
                <label for="docent">Bij welke docent spijbel je het liefst? </label>
                <input type="text" name="docent" id="docent" value="<?php echo isset($_POST['docent']) ? $_POST['docent'] : '' ?>">
                <!-- <span style="color:red">*</span> -->
                <br>
                <?php if(array_key_exists("docent", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </div>

        <div class="vraag">
                <label for="wat-kopen">Als je € 100.000- had, wat zou je dan kopen? </label>
                <input type="text" name="wat-kopen" id="wat-kopen" value="<?php echo isset($_POST['wat-kopen']) ? $_POST['wat-kopen'] : '' ?>">
                <!-- <span style="color:red">*</span> -->
                <br>
                <?php if(array_key_exists("wat-kopen", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </div>

        <div class="vraag">
                <label for="bezigheid">Wat is je favoriete bezigheid? </label>
                <input type="text" name="bezigheid" id="bezigheid" value="<?php echo isset($_POST['bezigheid']) ? $_POST['bezigheid'] : '' ?>">
                <!-- <span style="color:red">*</span> -->
                <br>
                <?php if(array_key_exists("bezigheid", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </div>
        
        <div class="submit-button"  >
        <input id="submit" type="submit" value="Versturen">
        </div>
        </form>

        <?php }  else { ?>            
        
            <p>Er heerst paniek in het koningkrijk <?php echo($_POST['welk-land'])?>, Koning <?php echo($_POST['docent'])?> is ten einde raad en als koning <?php echo($_POST['docent'])?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo($_POST['belangrijkste-persoon'])?>.</p>

            <p>"<?php echo($_POST['belangrijkste-persoon'])?>! Het is een ramp! Het is een schande!"</p>

            <p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>

            <p>"Mijn <?php echo($_POST['welk-dier'])?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo($_POST['speelgoed'])?> voor hem gekocht!"</p>

            <p>"Majesteit, uw <?php echo($_POST['welk-dier'])?> komt vast vanzelf weer terug?"</p>

            <p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo($_POST['bezigheid'])?> leren?"</p>

            <p>"Maar Sire, daar kunt u toch uw <?php echo($_POST['wat-kopen'])?> voor gebruiken."</p>

            <p>"<?php echo($_POST['belangrijkste-persoon'])?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>

            <p>"<?php echo($_POST['verveelt'])?>, Sire."</p>

            
        <?php } ?> 

        </div>
        
        <footer>Copyright © 2023 Deze website is gemaakt door Reza van Wegberg</footer>

    </body>
</html>