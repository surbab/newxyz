<div class="depts index">
	<h2><?php echo __('Depts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('dept_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($depts as $dept): ?>
	<tr>
		<td><?php echo h($dept['Dept']['id']); ?>&nbsp;</td>
		<td><?php echo h($dept['Dept']['name']); ?>&nbsp;</td>
		<td><?php echo h($dept['Dept']['dept_desc']); ?>&nbsp;</td>
		<td><?php echo h($dept['Dept']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($dept['Dept']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($dept['Dept']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($dept['Dept']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dept['Dept']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dept['Dept']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dept['Dept']['id']), null, __('Are you sure you want to delete # %s?', $dept['Dept']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Dept'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Controls'), array('controller' => 'controls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Control'), array('controller' => 'controls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contros'), array('controller' => 'contros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contro'), array('controller' => 'contros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hr Compstructtrees'), array('controller' => 'hr_compstructtrees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hr Compstructtree'), array('controller' => 'hr_compstructtrees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resource Men'), array('controller' => 'resource_men', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resource Man'), array('controller' => 'resource_men', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resource Wcs'), array('controller' => 'resource_wcs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resource Wc'), array('controller' => 'resource_wcs', 'action' => 'add')); ?> </li>
	</ul>
</div>
