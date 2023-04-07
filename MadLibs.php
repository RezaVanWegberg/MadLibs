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
    <title>Document</title>
</head>

    <body>
    
    <div class="container">

    <h1>Er heerst paniek...</h1>

    <?php  if ($_SERVER['REQUEST_METHOD'] == "GET" || !empty($error)) { ?>
            
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <p class="vraag">
                <label for="welk-dier">Welk dier zou je nooit als huisdier willen hebben? </label>
                <input type="text" name="welk-dier" id="welk-dier" value="<?php echo isset($_POST['welk-dier']) ? $_POST['welk-dier'] : '' ?>">
                <span style="color:red">*</span>
                <?php if(array_key_exists("welk-dier", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </p>

        <p class="vraag">
                <label for="belangrijkste-persoon">Wie is de belangrijkste persoon in je leven? </label>
                <input type="text" name="belangrijkste-persoon" id="belangrijkste-persoon" value="<?php echo isset($_POST['belangrijkste-persoon']) ? $_POST['belangrijkste-persoon'] : '' ?>">
                <span style="color:red">*</span>
                <?php if(array_key_exists("belangrijkste-persoon", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </p>

        <p class="vraag">
                <label for="welk-land">In welk land zou je graag willen wonen? </label>
                <input type="text" name="welk-land" id="welk-land" value="<?php echo isset($_POST['welk-land']) ? $_POST['welk-land'] : '' ?>">
                <span style="color:red">*</span>
                <?php if(array_key_exists("welk-land", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </p>

        <p class="vraag">
                <label for="verveelt">verveelt :</label>
                <input type="text" name="verveelt" id="verveelt" value="<?php echo isset($_POST['verveelt']) ? $_POST['verveelt'] : '' ?>">
                <span style="color:red">*</span>
                <?php if(array_key_exists("verveelt", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </p>

        <p class="vraag">
                <label for="speelgoed">speelgoed :</label>
                <input type="text" name="speelgoed" id="speelgoed" value="<?php echo isset($_POST['speelgoed']) ? $_POST['speelgoed'] : '' ?>">
                <span style="color:red">*</span>
                <?php if(array_key_exists("speelgoed", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </p>

        <p class="vraag">
                <label for="docent-spijbel">docent-spijbel :</label>
                <input type="text" name="docent-spijbel" id="docent-spijbel" value="<?php echo isset($_POST['docent-spijbel']) ? $_POST['docent-spijbel'] : '' ?>">
                <span style="color:red">*</span>
                <?php if(array_key_exists("docent-spijbel", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </p>

        <p class="vraag">
                <label for="wat-kopen">wat-kopen :</label>
                <input type="text" name="wat-kopen" id="wat-kopen" value="<?php echo isset($_POST['wat-kopen']) ? $_POST['wat-kopen'] : '' ?>">
                <span style="color:red">*</span>
                <?php if(array_key_exists("wat-kopen", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </p>

        <p class="vraag">
                <label for="bezigheid">bezigheid :</label>
                <input type="text" name="bezigheid" id="bezigheid" value="<?php echo isset($_POST['bezigheid']) ? $_POST['bezigheid'] : '' ?>">
                <span style="color:red">*</span>
                <?php if(array_key_exists("bezigheid", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </p>
        
        <div    >
        <input id="submit" type="submit" value="submit">
        </div>
        </form>

        <?php }  else { ?>            
        <?php
        echo "<h2>Your Input:</h2>";
        echo "je dier: ";
        echo $_POST['welk-dier'];
        echo "<br>";
        echo "je persoon: ";
        echo $_POST['belangrijkste-persoon'];
        echo "<br>";
        echo "je land: ";
        echo $_POST['welk-land'];
        ?>

            
        <?php } ?> 

        </div>
        
    </body>
</html>