<?php
require_once("menu.php");
require_once("footer.php");
require_once("inc/include_db.php");

$sql = "SELECT * FROM exam WHERE examID = ".$_GET["examID"];
$request = $db->query($sql); 

while ( $row = $request->fetch () )
{
    $found_exam = $row;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Prüfung für mein Visum gefunden!</title>
        <meta charset="UTF-8">
	    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <?php echo $page_menu; ?>
        <div id="wrapper">

            <div class="container-fluid">

                <h1>Sie möchten Ihr(e/n) <?php echo $found_exam["examApplications"];?> stellen und dafür benötigen Sie</h1>
            
                <h2>folgende Prüfung <?php echo $found_exam["examName"];?></h2>
                
            </div>
        </div>
        <?php echo $page_footer; ?>
    </body>
</html>