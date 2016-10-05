<?php
/* @var $this BiodatasController */
/* @var $model Biodatas */

$this->breadcrumbs=array(
	'Biodatas'=>array('manage'),
	$model->bio_id,
	'Details',
);

?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'bio_id',
		'category_id',
		'creating_user_id',
		'creation_date',
		'modify_date',
		'modify_user_id',
		'biodata_title',
		'reference_code',
		'biodata_desc',
		'passport_photo',
		'maid_photo',
		'maid_name',
		'dob',
		'height',
		'weight',
		'nationality',
		'residence_address_home',
		'port_repatriated_to',
		'contact_no_home',
		'religion',
		'education_level',
		'number_of_siblings',
		'ages_of_children',
		'marital_status',
		'past_n_existing_illness',
		'other_illness',
		'physical_disabilities',
		'dietary_restrictions',
		'food_handling_pref',
		'preference_rest_day',
		'other_remark',
		'evaluation_of_skills',
		'experience',
		'observation',
		'availability_interview',
	),
)); ?>
