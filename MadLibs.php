<?php
    $error = [];

    if ($_SERVER['REQUEST_METHOD'] == "POST"){


        foreach($_POST as $key => $value){
            if (!$value) {
                $error[$key] = "$key is niet ingevuld";
            }
        };
    } else {
    };
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
                <label for="welk-dier">welk-dier :</label>
                <input type="text" name="welk-dier" id="welk-dier" value="<?php echo isset($_POST['welk-dier']) ? $_POST['welk-dier'] : '' ?>">
                <span style="color:red">*</span>
                <?php if(array_key_exists("welk-dier", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </p>

        <p class="vraag">
                <label for="belangrijkste-persoon">belangrijkste-persoon :</label>
                <input type="text" name="belangrijkste-persoon" id="belangrijkste-persoon" value="<?php echo isset($_POST['belangrijkste-persoon']) ? $_POST['belangrijkste-persoon'] : '' ?>">
                <span style="color:red">*</span>
                <?php if(array_key_exists("belangrijkste-persoon", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </p>

        <p class="vraag">
                <label for="welk-land">welk-land :</label>
                <input type="text" name="welk-land" id="welk-land" value="<?php echo isset($_POST['welk-land']) ? $_POST['welk-land'] : '' ?>">
                <span style="color:red">*</span>
                <?php if(array_key_exists("welk-land", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

        </p>
        
        <div class="submit-button">
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