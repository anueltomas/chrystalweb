<div class="rolsUsers view">
<h2><?php echo __('Rols User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rolsUser['RolsUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rol'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rolsUser['Rol']['name'], array('controller' => 'rols', 'action' => 'view', $rolsUser['Rol']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rolsUser['User']['name'], array('controller' => 'users', 'action' => 'view', $rolsUser['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rols User'), array('action' => 'edit', $rolsUser['RolsUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rols User'), array('action' => 'delete', $rolsUser['RolsUser']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $rolsUser['RolsUser']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Rols Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rols User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
