
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New User By Referal</title>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TX85XPWGL0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TX85XPWGL0');
</script>

</head>
<body>
  
<?php 
$queryString = $_SERVER['QUERY_STRING']; // get the query string from the requesting URL
$newURL = "/v3/?" . $queryString; // include the query string in the redirect URL
header('Location: '.$newURL);
?>
</body>
</html>