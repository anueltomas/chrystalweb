<div class="permissions index">
	<h2><?php echo __('Permissions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('allowed'); ?></th>
			<th><?php echo $this->Paginator->sort('supervisor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('action_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rol_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($permissions as $permission): ?>
	<tr>
		<td><?php echo h($permission['Permission']['id']); ?>&nbsp;</td>
		<td><?php echo h($permission['Permission']['allowed']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($permission['Supervisor']['name'], array('controller' => 'supervisors', 'action' => 'view', $permission['Supervisor']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($permission['Action']['name'], array('controller' => 'actions', 'action' => 'view', $permission['Action']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($permission['Rol']['name'], array('controller' => 'rols', 'action' => 'view', $permission['Rol']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $permission['Permission']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $permission['Permission']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $permission['Permission']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $permission['Permission']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Permission'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Supervisors'), array('controller' => 'supervisors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supervisor'), array('controller' => 'supervisors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actions'), array('controller' => 'actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action'), array('controller' => 'actions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
	</ul>
</div>
