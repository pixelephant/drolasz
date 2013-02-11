<?php $this->Html->css('admin', null, array('inline' => false)); ?>

<?php
	echo $this->Form->create('Collegue', array('url' => '/admin/collegues/add', 'method' => 'post', 'type' => 'file'));

	if(isset($id)){
		echo $this->Form->input('id', array('type' => 'hidden', 'value' => $id));		
	}

	echo $this->Form->input('name_hun');
	echo $this->Form->input('name_eng');
	echo $this->Form->input('title_hun');
	echo $this->Form->input('title_eng');
	echo $this->Form->input('description_hun');
	echo $this->Form->input('description_eng');
	echo $this->Form->input('image', array('type' => 'file'));
	if(!empty($this->request->data['Collegue']['image'])){
		echo $this->Html->image($this->request->data['Collegue']['image']);
	}
	echo $this->Form->end(__d('cake', __('Mentés')));
?>