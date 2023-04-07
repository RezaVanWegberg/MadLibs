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
    <title>Onkunde</title>
</head>

    <body>
    
    <div class="container">

    <h2>Onkunde</h2>

    <?php  if ($_SERVER['REQUEST_METHOD'] == "GET" || !empty($error)) { ?>
            
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <div class="vraag">
                <label for="willen-kunnen">Wat zou je graag willen kunnen? </label>
                <input type="text" name="willen-kunnen" id="willen-kunnen" value="<?php echo isset($_POST['willen-kunnen']) ? $_POST['willen-kunnen'] : '' ?>">
                <!-- <span style="color:red">*</span> -->
                <br>
                <?php if(array_key_exists("willen-kunnen", $error)){ ?>
                    <br>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </div>

        <div class="vraag">
                <label for="opschieten">Met welke persoon kun je goed opschieten? </label>
                <input type="text" name="opschieten" id="opschieten" value="<?php echo isset($_POST['opschieten']) ? $_POST['opschieten'] : '' ?>">
                <!-- <span style="color:red">*</span> -->
                <br>
                <?php if(array_key_exists("opschieten", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </div>

        <div class="vraag">
                <label for="getal">Wat is je favoriete getal? </label>
                <input type="text" name="getal" id="getal" value="<?php echo isset($_POST['getal']) ? $_POST['getal'] : '' ?>">
                <!-- <span style="color:red">*</span> -->
                <br>
                <?php if(array_key_exists("getal", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </div>

        <div class="vraag">
                <label for="vakantie-item">Wat heb je altijd bij je als je op vakantie gaat? </label>
                <input type="text" name="vakantie-item" id="vakantie-item" value="<?php echo isset($_POST['vakantie-item']) ? $_POST['vakantie-item'] : '' ?>">
                <!-- <span style="color:red">*</span> -->
                <br>
                <?php if(array_key_exists("vakantie-item", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </div>

        <div class="vraag">
                <label for="beste-eigenschap">Wat is je beste persoonlijke eigenschap? </label>
                <input type="text" name="beste-eigenschap" id="beste-eigenschap" value="<?php echo isset($_POST['beste-eigenschap']) ? $_POST['beste-eigenschap'] : '' ?>">
                <!-- <span style="color:red">*</span> -->
                <br>
                <?php if(array_key_exists("beste-eigenschap", $error)){ ?>
                    <br>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </div>

        <div class="vraag">
                <label for="slechtste-eigenschap">Wat is je slechtste persoonlijke eigenschap? </label>
                <input type="text" name="slechtste-eigenschap" id="slechtste-eigenschap" value="<?php echo isset($_POST['slechtste-eigenschap']) ? $_POST['slechtste-eigenschap'] : '' ?>">
                <!-- <span style="color:red">*</span> -->
                <br>
                <?php if(array_key_exists("slechtste-eigenschap", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </div>

        <div class="vraag">
                <label for="overkomen">Wat is het ergste dat je kan overkomen? </label>
                <input type="text" name="overkomen" id="overkomen" value="<?php echo isset($_POST['overkomen']) ? $_POST['overkomen'] : '' ?>">
                <!-- <span style="color:red">*</span> -->
                <br>
                <?php if(array_key_exists("overkomen", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </div>
        
        <div class="submit-button"  >
        <input id="submit" type="submit" value="Versturen">
        </div>
        </form>

        <?php }  else { ?>            

            <p>Er zijn veel mensen die niet kunnen <?php echo($_POST['willen-kunnen'])?>. Neem nou <?php echo($_POST['opschieten'])?>. Zelfs met de hulp van een <?php echo($_POST['vakantie-item'])?>
            of zelfs <?php echo($_POST['getal'])?> kan <?php echo($_POST['opschieten'])?> niet <?php echo($_POST['willen-kunnen'])?>. Dat heeft niet te maken met een gebrek aan <?php echo($_POST['beste-eigenschap'])?>,
            maar met een te veel aan <?php echo($_POST['slechtste-eigenschap'])?>. Te veel <?php echo($_POST['slechtste-eigenschap'])?> leidt tot <?php echo($_POST['overkomen'])?> en dat is niet goed 
            als je wilt <?php echo($_POST['willen-kunnen'])?>. Helaas niet voor <?php echo($_POST['opschieten'])?>.
        </p>

            
        <?php } ?> 

        </div>
        
    </body>
</html>