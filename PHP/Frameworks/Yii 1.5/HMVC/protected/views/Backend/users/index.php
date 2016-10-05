<?php
$this->breadcrumbs=array(
	'Users',
);
?>


<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
)); ?>

