<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dataworking</title>
</head>
<body>

    <?php $nomProyecto = str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']); ?>

    <script>window.location.href = "<?php echo $nomProyecto; ?>public"</script>

</body>
</html>