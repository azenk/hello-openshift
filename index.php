<?php header("Refresh:2") ?>
<?php
  $ip = $_SERVER['SERVER_ADDR'];
  $pod_name = getenv('HOSTNAME');
  $hash = hash('md5', $ip, true);
  $color_string = substr(bin2hex($hash), -6);
?>
<html>
<head><title>Hello Openshift!</title></head>
<body>
<h1>Hello Openshift!</h1>
<p>This pod is running on <?php print $ip ?> whose name is <?php print $pod_name ?>.</p>
<p>This pod's color is <div style="background-color: <?php print $color_string; ?>; width: 5em; height: 5em;"</div></p>
</body>
</html>
