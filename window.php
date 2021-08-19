<html>
<head>
<script src='link_identifier.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<?php
$url = "https://www.youtube.com/watch?v=SwH_bJSPdmM";
$metas = get_meta_tags($url);
echo "<pre>"; 
print_r($metas); 
echo "</pre>";
?>
<input type="text" id="youTubeUrl" />
<input type="button" value="Validate" onclick="validateYouTubeUrl()">
<iframe id="videoObject" type="text/html" width="500" height="265" frameborder="0" allowfullscreen></iframe>
</body>
</html>