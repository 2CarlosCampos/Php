<<html>
    <head>
     <title>Prueba de PHP</title>
    </head>
    <body>
    <?php echo '<p>Hola Mundo</p>'; ?>
    </body>
   </html>
   
   <html>
    <head>
     <title>Prueba de PHP</title>
    </head>
    <body>
    <p>Hola mundo</p>
    </body>
   </html>
   
   <?php
   echo $_SERVER['HTTP_USER_AGENT'];
   ?>
   
   Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)
   
   <?php
   if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
       echo 'Está usando Internet Explorer.<br />';
   }
   ?>
   
   <?php
   if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
   ?>
   <h3>strpos() debe haber devuelto no falso</h3>
   <p>Está usando Internet Explorer</p>
   <?php
   } else {
   ?>
   <h3>strpos() debe haber devuelto falso</h3>
   <p>No está usando Internet Explorer</p>
   <?php
   }
   ?>
   
   <h3>strpos() debe haber devuelto no falso</h3>
   <p>Está usando Internet Explorer</p>
   
   <?php
   if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE ||
       strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) {
       echo 'You are using Internet Explorer.<br />';
   }
   ?>
   
   <?php
   if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE {
       echo 'You are using Internet Explorer.<br />';
   }
   ?>
   
   <?php
   if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE ||
       strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) ||
       strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE {
       echo 'You are using Internet Explorer.<br />';
   }
   ?>
   
   <?php
   if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE {
        echo 'You are using Edge.<br />';
   }
   ?>
   
   <?php
   if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
   ?>
   <h3>strpos() debe haber devuelto no falso</h3>
   <p>Está usando Internet Explorer</p>
   <?php
   } else {
   ?>
   <h3>strpos() debe haber devuelto falso</h3>
   <p>No está usando Internet Explorer</p>
   <?php
   }
   ?>
   
   <?php
   if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE ||
       strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) {
       echo 'You are using Internet Explorer.<br />';
   }
   ?>
   
   <?php
   if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE {
       echo 'You are using Internet Explorer.<br />';
   }
   ?>
   
   <?php
   if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE ||
       strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) ||
       strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE {
       echo 'You are using Internet Explorer.<br />';
   }
   ?>
   
   <form action="accion.php" method="post">
    <p>Su nombre: <input type="text" name="nombre" /></p>
    <p>Su edad: <input type="text" name="edad" /></p>
    <p><input type="submit" /></p>
   </form>
   
   