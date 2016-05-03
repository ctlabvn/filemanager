<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="robots" content="noindex,nofollow">
	<title><?= $this->fetch('title')?></title>
    <?= $this->Html->css('FileManager.bootstrap.min')?>
    <?= $this->Html->css('FileManager.font-awesome.min')?>
    <?= $this->Html->css('FileManager.style')?>
    <?= $this->fetch('css')?>
</head>
<body>
    <?= $this->element('FileManager.navbar')?>
	<div class="container-fluid" id="container">
		<?= $this->fetch('content')?>
	</div>
    <?= $this->Html->script('FileManager.jquery.min.js')?>
    <?= $this->Html->script('FileManager.bootstrap.min.js')?>
    <?= $this->fetch('script')?>
</body>
</html>