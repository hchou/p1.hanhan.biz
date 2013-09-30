<!DOCTYPE html>
<html>
<head>
    <?php require_once('logic.php'); ?>
    <link href="css/grass.css" rel="stylesheet" type="text/css">

</head>

<body class="<?=$themeClass?>">
    <p>Text and background colors for the "day" and "night" themes are defined in the CSS as classes.</p>
    <p>The active theme is: <?=$themeClass?></p>
    <div class="box">box!</div>
    <br>
    <?=$boxes?>

</body>
</html>
