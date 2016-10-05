<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cat_id), array('view', 'id'=>$data->cat_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_parent_id')); ?>:</b>
	<?php echo CHtml::encode($data->cat_parent_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_title')); ?>:</b>
	<?php echo CHtml::encode($data->cat_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_desc')); ?>:</b>
	<?php echo CHtml::encode($data->cat_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_thumb')); ?>:</b>
	<?php echo CHtml::encode($data->cat_thumb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_owner_id')); ?>:</b>
	<?php echo CHtml::encode($data->cat_owner_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_creation_date')); ?>:</b>
	<?php echo CHtml::encode($data->cat_creation_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_hasoption')); ?>:</b>
	<?php echo CHtml::encode($data->cat_hasoption); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_active')); ?>:</b>
	<?php echo CHtml::encode($data->cat_active); ?>
	<br />

	*/ ?>

</div>