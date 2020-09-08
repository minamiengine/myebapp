<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 Hello World! - Success Deployment!!!<p>
 Ver 1.0<p>

<?php
 echo '<p>', date('Y/m/d H:i:s'), '</p>';
 echo 'AURORA_ENDPOINT: ', $_SERVER['AURORA_ENDPOINT'], '</p>';
 echo 'AURORA_READ_ENDPOINT: ', $_SERVER['AURORA_READ_ENDPOINT'], '</p>';
 echo 'ELASTICACHE_CONFIGURATION_ENDPOINT: ', $_SERVER['ELASTICACHE_CONFIGURATION_ENDPOINT'], '</p>';
 echo 'DATA_CSV_BUCKET_NAME: ', $_SERVER['DATA_CSV_BUCKET_NAME'], ' : Only access this variables for EB-Mainte-Kanri Servers', '</p>';
 echo 'THUMBNAIL_DATA_BUCKET_NAME: ', $_SERVER['THUMBNAIL_DATA_BUCKET_NAME'], ' : Only access this variables for EB-Mainte-Kanri Servers', '</p>';
?>

 </body>
</html>
