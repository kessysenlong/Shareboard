<div>
	<a class = "btn btn-success btn-share" style = "margin-top: 20px; margin-bottom: 20px" href ="<?php echo ROOT_URL; ?>shares/add">Share Something</a>
	<?php foreach($viewmodel as $item) : ?>
		<div class="jumbotron mt-3">
			<h3><?php echo $item ['title']; ?></h3>
			<small><?php echo $item['create_date']; ?>
				<hr />
				<p><?php echo $item['body']; ?></p>
				<br />
				<a class = "btn btn-lg btn-primary" href="<?php echo $item['link']; ?>" target="_blank">Go to website</a>
			</small>
			</div>


</div>
	<?php endforeach; ?>	
	
</div>