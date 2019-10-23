<div class="subactions form">
<?php echo $this->Form->create('Subaction'); ?>
	<fieldset>
		<legend><?php echo __('Edit Subaction'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('action_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Subaction.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Subaction.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Subactions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Actions'), array('controller' => 'actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action'), array('controller' => 'actions', 'action' => 'add')); ?> </li>
	</ul>
</div>
