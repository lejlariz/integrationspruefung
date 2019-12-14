<?php
    require_once("menu.php");
    require_once("footer.php"); 
    if ( isset(  $_POST["btn_step2"])){
        $date_entry = new DateTime($_POST["entry_austria"]);
        $date_entry->add(new DateInterval('P8Y'));
        echo $date_entry->format('d-m-Y') . "\n";

        $date_current = new DateTime();
        if ($date_entry < $date_current){
            header("Location: ./result.php?examID=3");
            exit ();
        }
        else {
            header("Location: ./result.php?examID=4");
            exit ();
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Weiterführende Informationen zwecks Daueraufenthalt, Staatsbürgerschaft notwendig, um Prüfung für mein Visum zu finden.</title>
        <meta charset="UTF-8">
	    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php echo $page_menu;?>
        <div id="wrapper">

            <div class="container-fluid"> 

                <h1>Sie möchten für den Daueraufenthalt oder die Staatsbürgerschaft beantragen.</h1>
                <p>Infotext</p>
                <h2>Seit wann sind Sie in Österreich?</h2>
                <form method="post">
                    <fieldset>
                        <label>
                            <input type="date" id="date_of_entry_austria" name="entry_austria" value="Meldedatum" required>
                        </label>
                    </fieldset><br>
                    <div class="btn-center"><button type="submit" name="btn_step2">Prüfung finden</button></div>
                </form>
            </div>
        </div>
        <?php echo $page_footer; ?>
    </body>
</html>