<div class="subactions view">
<h2><?php echo __('Subaction'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subaction['Subaction']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($subaction['Subaction']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($subaction['Subaction']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($subaction['Subaction']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Action'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subaction['Action']['name'], array('controller' => 'actions', 'action' => 'view', $subaction['Action']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subaction'), array('action' => 'edit', $subaction['Subaction']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subaction'), array('action' => 'delete', $subaction['Subaction']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $subaction['Subaction']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Subactions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subaction'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actions'), array('controller' => 'actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action'), array('controller' => 'actions', 'action' => 'add')); ?> </li>
	</ul>
</div>
