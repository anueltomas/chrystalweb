<div class="rolsUsers form">
<?php echo $this->Form->create('RolsUser'); ?>
	<fieldset>
		<legend><?php echo __('Edit Rols User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('rol_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RolsUser.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('RolsUser.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Rols Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
