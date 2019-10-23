<div class="supervisors form">
<?php echo $this->Form->create('Supervisor'); ?>
	<fieldset>
		<legend><?php echo __('Edit Supervisor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('nickname');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Supervisor.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Supervisor.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Supervisors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Permissions'), array('controller' => 'permissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permission'), array('controller' => 'permissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
