<div class="userAccessSettings index">
	<h2><?php echo __('User Access Settings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('control_id'); ?></th>
			<th><?php echo $this->Paginator->sort('read'); ?></th>
			<th><?php echo $this->Paginator->sort('write'); ?></th>
			<th><?php echo $this->Paginator->sort('update'); ?></th>
			<th><?php echo $this->Paginator->sort('delete'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($userAccessSettings as $userAccessSetting): ?>
	<tr>
		<td><?php echo h($userAccessSetting['UserAccessSetting']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userAccessSetting['User']['user_name'], array('controller' => 'users', 'action' => 'view', $userAccessSetting['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userAccessSetting['Control']['name'], array('controller' => 'controls', 'action' => 'view', $userAccessSetting['Control']['id'])); ?>
		</td>
		<td><?php echo h($userAccessSetting['UserAccessSetting']['read']); ?>&nbsp;</td>
		<td><?php echo h($userAccessSetting['UserAccessSetting']['write']); ?>&nbsp;</td>
		<td><?php echo h($userAccessSetting['UserAccessSetting']['update']); ?>&nbsp;</td>
		<td><?php echo h($userAccessSetting['UserAccessSetting']['delete']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userAccessSetting['UserAccessSetting']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userAccessSetting['UserAccessSetting']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userAccessSetting['UserAccessSetting']['id']), null, __('Are you sure you want to delete # %s?', $userAccessSetting['UserAccessSetting']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New User Access Setting'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Controls'), array('controller' => 'controls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Control'), array('controller' => 'controls', 'action' => 'add')); ?> </li>
	</ul>
</div>
