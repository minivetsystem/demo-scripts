<?php
/* Author :: Pritam */
/**
 * 
 */
Yii::import('zii.widgets.CListView');
class CatTree extends CListView {
	public $data;
	public $returnData = '';
	
	function init() {
		//print_r($this->data);
		$this->getRecursiveCategories();
		
	}
	
	public function run() {
		if($this->returnData!='')
			echo $this->returnData;
		else
			echo CHtml::openTag('h3')."No category found".CHtml::closeTag('h3');
    }
	
	public function getRecursiveCategories($parent = 0) {
		$_data = Category::getCategoryTree($parent);
		if(!empty($_data)) {
			if($parent==0) {
				$ulOpt = array('class'=>'start_tree');
			}
			elseif($parent=='1') {
				$ulOpt = array('class'=>'sortable');
			}
			else {
				$ulOpt = array();
			}
			  
			$this->returnData .= CHtml::openTag('ul',$ulOpt)."\n";
			foreach($_data as $each) {
				$this->returnData .= CHtml::openTag('li')."\n";
				$this->returnData .= '<i class="icon-move"></i>';
				$this->returnData .= CHtml::openTag('span').strip_tags($each['cat_title']).CHtml::closeTag('span');
				
				$active = ($each['cat_active'])?0:1;
				if($each['cat_active']) {					
					$text = '<img src="'.Yii::app()->getBaseUrl(true).'/css/Backend/images/deactivate.png" height="32">'; $class = 'active';
					$replaceimg = Yii::app()->getBaseUrl(true).'/css/Backend/images/activate.png';
					$title='Deactivate';
				}
				else {
					$text = '<img src="'.Yii::app()->getBaseUrl(true).'/css/Backend/images/activate.png" height="32">'; $class = 'inactive';
					$replaceimg = Yii::app()->getBaseUrl(true).'/css/Backend/images/deactivate.png';
					$title='Activate';
				}
				
				//if(!jConfirm('Are you sure you want to change status this Category?', 'Confirm Change', function(r) { return r; })){return}
				/*if(!confirm('Are you sure you want to change status this Category?')) {
										return false;
									}*/
									
				$this->returnData .= CHtml::ajaxLink($text, 
						Yii::app()->createUrl('category/status'), 
						array(
								'type'=>'GET',
								'update'=>'js:$(this).serialize()',
								'data'=>array('id'=>$each['cat_id'], 'this_id'=>'js:this.id', 'ajax'=>'1', 'image'=>'js:$(this).children("img").attr("src")', 'is_active'=>'js:$(this).hasClass("active")'),
								'beforeSend' => "js:function() {
									if(!confirm('Are you sure you want to change status this Category?')) {
										return false;
									}
								}",
								'success' => "js:function( data )
								{
									var resp = $.parseJSON(data);
									if($(resp.output.resp_to).hasClass('active')) {
										$(resp.output.resp_to).removeClass('active');
									}
									else {
										$(resp.output.resp_to).removeClass('inactive');
									}
									$(resp.output.resp_to).addClass(resp.output.aClass);
									$(resp.output.resp_to).children('img').attr(\"src\",resp.output.replace_image);
								}"                                                                            
						),
						array(
								'href' => Yii::app()->createUrl('category/status'),
								'class'=>'status '.$class
						)
				);                                              
			
				
				$this->returnData .= CHtml::link('Update',array('category/update', 'id'=>$each['cat_id']),array('class'=>'grad-blue'));
				$this->returnData .= CHtml::link('Manage Fields',array('category/fields', 'id'=>$each['cat_id']),array('class'=>'grad-gray'));
				$this->returnData .= CHtml::openTag('span',array('class'=>'clear')).'&nbsp;'.CHtml::closeTag('span')."\n";
				
				//Recursive call
				$this->getRecursiveCategories($each['cat_id']);
				$this->returnData .= '<input type="hidden" name="cat_order['.$each['cat_id'].']" value="'.$each['cat_order'].'">';
				$this->returnData .= CHtml::closeTag('li')."\n";
			}
			$this->returnData .= CHtml::closeTag('ul')."\n";
		}		
	}
}