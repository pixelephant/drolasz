<?php $this->Html->css('admin', null, array('inline' => false)); ?>

<?php
	echo $this->Form->create('Collegue', array('url' => '/admin/collegues/add', 'method' => 'post', 'type' => 'file'));

	if(isset($id)){
		echo $this->Form->input('id', array('type' => 'hidden', 'value' => $id));		
	}

	echo $this->Form->input('name_hun', array('label' => 'Név magyarul'));
	echo $this->Form->input('name_eng', array('label' => 'Név angolul'));
	echo $this->Form->input('title_hun', array('label' => 'Titulus magyarul'));
	echo $this->Form->input('title_eng', array('label' => 'Titulus angolul'));
	echo $this->Form->input('description_hun', array('label' => 'Leírás magyarul'));
	echo $this->Form->input('description_eng', array('label' => 'Leírás angolul'));
	echo $this->Form->input('image', array('type' => 'file', 'label' => 'Kép (~300px széles)'));
	if(!empty($this->request->data['Collegue']['image'])){
		echo $this->Html->image($this->request->data['Collegue']['image']);
	}
	echo $this->Form->end(__d('cake', __('Mentés')));
?>