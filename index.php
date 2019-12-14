<?php
require_once("menu.php");
require_once("footer.php");

    if( isset(  $_POST["btn_step1"])){
        
        if( $_POST["applications"] == "Erstantrag"){
            header("Location: ./result.php?examID=1");
            exit();
            }
        else if ($_POST["applications"] == "Zweitvisum oder Verlängerung"){
            header("Location: ./result.php?examID=2");
            exit();
        }else{
            header("Location: ./furtherinfo.php");
            exit();
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Prüfung für mein Visum, MA35, Erstes Visum, Verlängerung, Daueraufenthalt, Staatsbürgerschaft, ÖIF Integrationsprüfung (IV/2017)</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Prüfung finden für mein Visum. ÖIF Integrationsprüfung A1, A2, B1 (IV/2017) ÖSD Zertifikat A1, A2, B1, B2 Sprachprüfung MA35 Antrag">
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="cache-control" content="no-cache">
        <meta http-equiv="expires" content="0">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php echo $page_menu;?>
        <div id="wrapper">
            <div id="app">

                <div class="container-fluid">
                    <?php 
                        if (isset ($_GET["contactformsent"])){
                        echo "<div class=\"success-box\">Danke. Ihre Nachricht wurde erfolgreich gesendet. Wir antworten Ihnen so rasch als möglich.</div>";
                    }
                    ?>

                    <h1>Welche Prüfung brauche ich für mein Visum?</h1>
                    <p>Die Integrationsvereinbarung (IV) 2011 dient der Integration rechtmäßig im Bundesgebiet niedergelassener Drittstaatsangehöriger (D.h. Nicht-EU-Bürger/innen, Nicht-Asyl-/bzw. subsidiär Schutzberechtigte) und zielt darauf ab, sie zur Teilnahme am gesellschaftlichen, wirtschaftlichen und kulturellen Leben in Österreich zu befähigen.</p><p>Drittstaatsangehörige, denen ihr erstmaliger Aufenthaltstitel zwischen 1. Juli 2011 und 30. September 2017 erteilt wurde, verpflichten sich innerhalb von 2 Jahren dazu, vertiefte Kenntnisse der deutschen Sprache zum Zweck der Teilnahme am gesellschaftlichen, wirtschaftlichen und kulturellen Leben in Österreich zu erwerben (Modul 1 der IV 2011).</p><p>Personen, die dieser Verpflichtung noch nicht nachgekommen sind, haben längstens bis 30. September 2020 die Möglichkeit das Modul 1 nach den Bestimmungen der IV 2011 zu erfüllen.</p></p>
                    <h2>Für welches Visum wurde beantragt?</h2>
                    <img src="img/paste-solid.svg" id="picture" width="80">
                    <br>
                    <form method="post">
                        <fieldset>
                            <input type="radio" data-bild="file-contract-solid" id="first_visa_application" name="applications" value="Erstantrag" required>
                            <label for="first_visa_application"> Erstantrag</label>
                            <input type="radio" data-bild="stamp-solid" id="second_visa_application" name="applications" value="Zweitvisum oder Verlängerung" required>
                            <label for="second_visa_application"> Zweitvisum oder Verlängerung</label>
                            <input type="radio" data-bild="passport-solid" id="permanent_application" name="applications" value="Daueraufenthalt oder Staatsbürgerschaft" required>
                            <label for="permanent_application"> Daueraufenthalt oder Staatsbürgerschaft</label>
                        </fieldset><br>
                        <div class="btn-center"><button type="submit" name="btn_step1">Prüfung finden</button></div><br>
                    </form>
                </div>
            </div>
        </div>
        <?php echo $page_footer;?>
        <script src="js/jquery-3.4.1.min.js">
        </script>
        <script>
        $(document).ready(function(){
            $("span, input").click(function(){
                var bild=$(this).attr("data-bild");
                $("#picture").attr("src","img/"+bild+".svg");
            });	
        });
        </script>
    </body>
</html>