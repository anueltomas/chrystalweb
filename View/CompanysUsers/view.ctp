<div class="companysUsers view">
<h2><?php echo __('Companys User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($companysUser['CompanysUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companysUser['User']['name'], array('controller' => 'users', 'action' => 'view', $companysUser['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companysUser['Company']['name'], array('controller' => 'companies', 'action' => 'view', $companysUser['Company']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Companys User'), array('action' => 'edit', $companysUser['CompanysUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Companys User'), array('action' => 'delete', $companysUser['CompanysUser']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $companysUser['CompanysUser']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Companys Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companys User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
