<?php header("Refresh:2") ?>
<html>
<head><title>Hello Openshift!</title></head>
<body>
<h1>Hello Openshift!</h1>
<p>This pod is running on <?php print $_SERVER['SERVER_ADDR'] ?> whose name is <?php print getenv('HOSTNAME') ?>.</p>
</body>
</html>
