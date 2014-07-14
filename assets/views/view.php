<h3><?php echo $fairy->name;?></h3>
<p class="lead">
	<?php echo $fairy->interests;?>
</p>
<a href="/fairies/delete/<?php echo $fairy->id; ?>" class="btn btn-danger" onclick="return alert('Are you sure?');">Delete this fairy</a>
<a href="/" class="btn btn-success">Back to the list of fairies</a>
