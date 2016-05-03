<?php
use Cake\Core\Configure;
$base_path = Configure::read('FileManager.path');
?>
<div class="items-wrapper">	
	<?php
	foreach ($contents as $content) {
		$item_id = $this->Text->uuid($content['timestamp'] . $content['type'] . $content['basename']);
		echo $this->element('FileManager.item', ['content' => $content, 'item_id' => $item_id, 'base_path' => $base_path]);
	}
	?>
</div>
<?php
$this->Html->scriptStart(['block' => true, 'inline' => true]);
?>

$(document).ready(function(){
	$(".item").mouseenter(function () {
		var operator = $(this).children('.operation');
		var title = $(this).children('.title');
		title.slideUp("slow");
		operator.css('display', 'block');
	})
});

<?php
$this->Html->scriptEnd();
?>