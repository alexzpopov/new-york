<?php
$title = ' customize and order skillfully made things';
require_once('lay/lay.top.php');

require_once('lay/lay.topbar.php');

?>
<div class="container">
<?php if(strlen($get)>0){ ?>
<div class="panel panel-default"><div class="container">
<h1>Customize this skillfully made product!</h1>
<?php 
require_once('_conn.php');
$query = 'SELECT * FROM items WHERE id_i='.quoty($get).' LIMIT 1';
$result = mysql_query($query);
while($row = mysql_fetch_assoc($result)){
	echo '<div class="row"><div class="col-md-4"><img src="'.$row['photo_large'].'" /></div><div class="col-md-4"><h2>'.$row['name'].'</h2> '.$row['description'].'<div><hr /><button href="https://testflightapp.com/join/3029fbb8c6cca865ef7515dedf81b87a-MjU4ODA2/" class="btn btn-default">Get the App!</button></div></div></div>';
}
echo '</div></div>';
}else{
?>
<h1>Get Customized Products Made By Real People</h1>
<?php 	
} ?>
<a href="https://testflightapp.com/join/3029fbb8c6cca865ef7515dedf81b87a-MjU4ODA2/"><img src="/appicon.png" width="256" height="256" /></a>
</div>
<?php 
require_once('lay/lay.bot.php');