<?php $this->Html->css('admin', null, array('inline' => false)); ?>
<div class="users form">
<?php #echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Írjon be felhasználónevet és jelszót a belépéshez'); ?></legend>
        <?php echo $this->Form->input('username', array('label' => 'Felhasználónév'));
        echo $this->Form->input('password', array('label' => 'Jelszó'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>