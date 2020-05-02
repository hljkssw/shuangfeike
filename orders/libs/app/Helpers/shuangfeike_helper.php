<?php
/**
 * www.shuangfeike.cn
 *
 */

// --------------------------------------------------------------------
if (! function_exists('showmessage'))
{
	function showmessage($message="", $url="", $title = "提示信息", $siteurl = TRUE, $refreshtime="1000")
	{
		echo '<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link rel="stylesheet" href="http://www.90451.com/assets/bootstrap/css/bootstrap.min.css"><title>'.$title.'</title></head><body><div class="alert alert-light" role="alert"><div class="card card-primary"><div class="card-header"><h4>'.$title.'</h4></div><div class="card-body">';
		if ($message)
		{
			echo '<p class="card-text">'.$message.'</p>';
		}
		if ($url)
		{
			echo "<script type=\"text/javascript\">
function redirect() {
window.location.replace('".$url."');
}
setTimeout('redirect();', ".$refreshtime.");
</script>";
			echo "<a href=\"".$url."\" class=\"alert-link\">如果您的浏览器没有自动跳转，请点击这里 ...</a>";
		}
		echo '</div></div></div></body></html>';
		exit;
	}
}
