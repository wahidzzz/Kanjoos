<?php  if (count($errors) > 0) : ?>
  <div id='err' class="error">
	<div id='close' class="right"><button class="btn white red-text" onclick="(function(){ document.getElementById('err').style.display= 'none'; })();">X</button></div>
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>