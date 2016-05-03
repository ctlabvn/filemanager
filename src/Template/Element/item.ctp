<?php
use Cake\Core\Configure;
echo "<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6 item\" id=\"$item_id\">";
if ($content['type'] === 'file') {
	switch ($content['extension']) {
		case in_array($content['extension'], ['png', 'jpg', 'jpeg', 'bmp', 'gif']):
			echo "<div class=\"preview\" style=\"background: url(/". $base_path .'/'. $content['path'].") no-repeat center top; background-size: cover;\"></div>";
			break;

		case in_array($content['extension'], ['json', 'php', 'asp', 'html', 'css', 'js', 'java', 'lua', 'rb', 'cgi', 'jsp', 'htm', 'xml']):
			echo "<div class=\"preview\" style=\"background: url(/file_manager/img/icons/file-code-o.png) no-repeat center center\"></div>";
			break;

		case in_array($content['extension'], ['doc', 'docx']):
			echo "<div class=\"preview\" style=\"background: url(/file_manager/img/icons/file-word-o.png) no-repeat center center\"></div>";
			break;

		case in_array($content['extension'], ['xls', 'xlsx']):
			echo "<div class=\"preview\" style=\"background: url(/file_manager/img/icons/file-excel-o.png) no-repeat center center\"></div>";
			break;

		case in_array($content['extension'], ['txt']):
			echo "<div class=\"preview\" style=\"background: url(/file_manager/img/icons/file-text-o.png) no-repeat center center\"></div>";
			break;

		case in_array($content['extension'], ['pdf']):
			echo "<div class=\"preview\" style=\"background: url(/file_manager/img/icons/file-pdf-o.png) no-repeat center center\"></div>";
			break;
		
		default:
			echo "<div class=\"preview\" style=\"background: url(/file_manager/img/icons/".$content['extension']."-o.png) no-repeat center center\"></div>";
			break;
	}
} else {
	echo "<div class=\"preview\" style=\"background: url(/file_manager/img/icons/folder-o.png) no-repeat center center\"></div>";
}
echo "<div class=\"title\">".h($content['basename'])."</div>";
echo "<div class=\"operation\">";
echo "<i class=\"fa fa-trash\"></i>";
echo "</div>";
echo "</div>";
