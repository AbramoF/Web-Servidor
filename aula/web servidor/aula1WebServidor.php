<html>
      <?php
            $titulo ="Minha Pagina";
            $campo = "text";
            $value = "um formulário";
      ?>
      <head>
            <title><?php echo $titulo; ?></title>
      </head>
      <body>
            <p>Campo para um texto: </p>
            <input type="<?= $campo; ?>" value="<?= $value; ?>"/>
      </body>
</html>