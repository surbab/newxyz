<div class="generalAccessSettings index">
	<h2><?php echo __('General Access Settings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_group_id'); ?></th>
			<th><?php echo $this->Paginator->sort('control_id'); ?></th>
			<th><?php echo $this->Paginator->sort('create'); ?></th>
			<th><?php echo $this->Paginator->sort('read'); ?></th>
			<th><?php echo $this->Paginator->sort('update'); ?></th>
			<th><?php echo $this->Paginator->sort('delete'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($generalAccessSettings as $generalAccessSetting): ?>
	<tr>
		<td><?php echo h($generalAccessSetting['GeneralAccessSetting']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($generalAccessSetting['UserGroup']['userg_name'], array('controller' => 'user_groups', 'action' => 'view', $generalAccessSetting['UserGroup']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($generalAccessSetting['Control']['name'], array('controller' => 'controls', 'action' => 'view', $generalAccessSetting['Control']['id'])); ?>
		</td>
		<td><?php echo h($generalAccessSetting['GeneralAccessSetting']['create']); ?>&nbsp;</td>
		<td><?php echo h($generalAccessSetting['GeneralAccessSetting']['read']); ?>&nbsp;</td>
		<td><?php echo h($generalAccessSetting['GeneralAccessSetting']['update']); ?>&nbsp;</td>
		<td><?php echo h($generalAccessSetting['GeneralAccessSetting']['delete']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $generalAccessSetting['GeneralAccessSetting']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $generalAccessSetting['GeneralAccessSetting']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $generalAccessSetting['GeneralAccessSetting']['id']), null, __('Are you sure you want to delete # %s?', $generalAccessSetting['GeneralAccessSetting']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New General Access Setting'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Controls'), array('controller' => 'controls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Control'), array('controller' => 'controls', 'action' => 'add')); ?> </li>
	</ul>
</div>
