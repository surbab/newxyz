<div class="uoms index">
	<h2><?php echo __('Uoms'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('uom'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('uom_symbol'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($uoms as $uom): ?>
	<tr>
		<td><?php echo h($uom['Uom']['id']); ?>&nbsp;</td>
		<td><?php echo h($uom['Uom']['uom']); ?>&nbsp;</td>
		<td><?php echo h($uom['Uom']['asset_desc']); ?>&nbsp;</td>
		<td><?php echo h($uom['Uom']['uom_symbol']); ?>&nbsp;</td>
		<td><?php echo h($uom['Uom']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($uom['Uom']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($uom['Uom']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($uom['Uom']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $uom['Uom']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $uom['Uom']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $uom['Uom']['id']), null, __('Are you sure you want to delete # %s?', $uom['Uom']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Uom'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Estimination Dets'), array('controller' => 'estimination_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimination Det'), array('controller' => 'estimination_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Po Dets'), array('controller' => 'po_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Po Det'), array('controller' => 'po_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quote Dets'), array('controller' => 'quote_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quote Det'), array('controller' => 'quote_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List So Dets'), array('controller' => 'so_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New So Det'), array('controller' => 'so_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
