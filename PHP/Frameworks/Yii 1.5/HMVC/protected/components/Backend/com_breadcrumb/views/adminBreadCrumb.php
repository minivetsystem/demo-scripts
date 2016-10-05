<div class="breadcrumbs">   
    <?php 
	/*echo '<pre>';
	print_r($this->crumbs);
	echo '</pre>';*/
	echo CHtml::link('Home', Yii::app()->createUrl('admin/index'));
	echo $this->delimiter;
    foreach($this->crumbs as $key=>$crumb) {
		if(is_numeric($key)) {
			if(is_array($crumb)) {
			  if($crumb[0]=='view') {
				  echo $pid = next($crumb);
			  }
			}
			else
			  echo $crumb;
		}
		else {
			if(is_array($crumb)) {
				if(count(explode('/',$crumb[0]))<=1) {
					echo CHtml::link($key, $crumb[0]);
				}
				else 
				  echo CHtml::link($key, Yii::app()->createUrl($crumb[0]));
			}
		}
		if(next($this->crumbs)) {
			echo $this->delimiter;
		}
    }
    ?>
</div>