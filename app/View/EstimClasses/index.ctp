<div class="estimClasses index">
	<h2><?php echo __('Estim Classes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('desc'); ?></th>
			<th><?php echo $this->Paginator->sort('class_active'); ?></th>
			<th><?php echo $this->Paginator->sort('uom_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estimClasses as $estimClass): ?>
	<tr>
		<td><?php echo h($estimClass['EstimClass']['id']); ?>&nbsp;</td>
		<td><?php echo h($estimClass['EstimClass']['name']); ?>&nbsp;</td>
		<td><?php echo h($estimClass['EstimClass']['desc']); ?>&nbsp;</td>
		<td><?php echo h($estimClass['EstimClass']['class_active']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estimClass['Uom']['id'], array('controller' => 'uoms', 'action' => 'view', $estimClass['Uom']['id'])); ?>
		</td>
		<td><?php echo h($estimClass['EstimClass']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($estimClass['EstimClass']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($estimClass['EstimClass']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($estimClass['EstimClass']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $estimClass['EstimClass']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $estimClass['EstimClass']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estimClass['EstimClass']['id']), null, __('Are you sure you want to delete # %s?', $estimClass['EstimClass']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Estim Class'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Uoms'), array('controller' => 'uoms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uom'), array('controller' => 'uoms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimination Dets'), array('controller' => 'estimination_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimination Det'), array('controller' => 'estimination_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
