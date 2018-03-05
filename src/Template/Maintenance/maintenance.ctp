<!DOCTYPE html>
<html>
<head>
	<title>Website Đang Bảo Trì</title>
    <?= $this->Html->css('/errorpage/css/style.css') ?>
    <?= $this->Html->script('/errorpage/js/jquery-1.11.1.min.js') ?>
</head>
<body>
	<div class="main">
		<div class="agile">
			<div class="agileits_main_grid">
				<div class="clear"> </div>
			</div>
			<div class="w3l">
				<div class="text">
					<h1 style="font-size:150px;">503</h1>	
					<p>Website đang bảo trì. Vui lòng quay lại sau.</p>
				</div>
				<div class="image">
					<?= $this->Html->image('/errorpage/images/smile.png') ?>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</body>
</html>