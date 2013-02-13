<?php $this->Html->css('admin', null, array('inline' => false)); ?>

<?php
	echo $this->Form->create('Document', array('url' => '/admin/documents/add', 'method' => 'post', 'type' => 'file'));

	if(isset($id)){
		echo $this->Form->input('id', array('type' => 'hidden', 'value' => $id));		
	}

	echo $this->Form->input('name_hun', array('label' => 'Név magyarul'));
	echo $this->Form->input('name_eng', array('label' => 'Név angolul'));
	echo $this->Form->input('description_hun', array('label' => 'Magyarázat magyarul'));
	echo $this->Form->input('description_eng', array('label' => 'Magyarázat angolul'));
	echo $this->Form->input('file_hun', array('type' => 'file', 'label' => 'Magyar dokumentum'));
	if(isset($id)){
		echo '<div class="input">' . $this->request->data['Document']['file_hun'] . '</div>';
	}	
	echo $this->Form->input('file_eng', array('type' => 'file', 'label' => 'Angol dokumentum'));
	if(isset($id)){
		echo '<div class="input">' . $this->request->data['Document']['file_eng'] . '</div>';
	}	

	echo $this->Form->end(__d('cake', __('Mentés')));
?>