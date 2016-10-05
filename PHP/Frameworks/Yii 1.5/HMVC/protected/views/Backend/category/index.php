<?php
$this->breadcrumbs=array(
	'Categories',
);

?>
<fieldset class="categoryTree span7">
	<li class="rootLi">Root</li>
	<?php $this->widget('application.components.Backend.com_catTree.CatTree', array()); ?>
</fieldset>
