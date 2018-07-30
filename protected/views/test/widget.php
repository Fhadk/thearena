<?php 

$dataProvider=new CActiveDataProvider('AgentHeirarchy');

$this->widget('zii.widgets.grid.o', array(
		'dataProvider'=>$dataProvider,
));
?>