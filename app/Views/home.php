<script>
  base_url = '<?php print base_url(); ?>';
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
    
  <input type="text" id="entrada">
    <button type="button" id="btn_input">ENVIAR</button>

    <br><br>
    RESULTADO:
    <input type="text" id="resultado">
    <div id="div_result"></div>
    

    <script src="<?php echo base_url(); ?>/js/home.js"></script>
</body>
</html>