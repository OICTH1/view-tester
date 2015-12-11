<?php echo Form::open('index.php/viewtest/view');?>
<h2>View Name</h2>
<?php echo Form::input('viewname');?>

<h2>Datas JSON</h2>
<?php echo Form::textarea('data');?>

<?php
	echo Form::submit('submit','');
	echo Form::close();
?>
