<div class="resourceMen index">
	<h2><?php echo __('Resource Men'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('res_nick'); ?></th>
			<th><?php echo $this->Paginator->sort('dept_id'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($resourceMen as $resourceMan): ?>
	<tr>
		<td><?php echo h($resourceMan['ResourceMan']['id']); ?>&nbsp;</td>
		<td><?php echo h($resourceMan['ResourceMan']['res_nick']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($resourceMan['Dept']['name'], array('controller' => 'depts', 'action' => 'view', $resourceMan['Dept']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($resourceMan['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $resourceMan['Employee']['ID'])); ?>
		</td>
		<td><?php echo h($resourceMan['ResourceMan']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($resourceMan['ResourceMan']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($resourceMan['ResourceMan']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($resourceMan['ResourceMan']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $resourceMan['ResourceMan']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $resourceMan['ResourceMan']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $resourceMan['ResourceMan']['id']), null, __('Are you sure you want to delete # %s?', $resourceMan['ResourceMan']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Resource Man'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Depts'), array('controller' => 'depts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dept'), array('controller' => 'depts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wo Prod Det Men'), array('controller' => 'wo_prod_det_men', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wo Prod Det Man'), array('controller' => 'wo_prod_det_men', 'action' => 'add')); ?> </li>
	</ul>
</div>
