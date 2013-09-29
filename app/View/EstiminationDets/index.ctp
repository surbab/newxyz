<div class="estiminationDets index">
	<h2><?php echo __('Estimination Dets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('estimation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estim_class_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estim_qty'); ?></th>
			<th><?php echo $this->Paginator->sort('uom_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estim_value'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estiminationDets as $estiminationDet): ?>
	<tr>
		<td><?php echo h($estiminationDet['EstiminationDet']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estiminationDet['Estimation']['id'], array('controller' => 'estimations', 'action' => 'view', $estiminationDet['Estimation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($estiminationDet['EstimClass']['name'], array('controller' => 'estim_classes', 'action' => 'view', $estiminationDet['EstimClass']['id'])); ?>
		</td>
		<td><?php echo h($estiminationDet['EstiminationDet']['estim_qty']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estiminationDet['Uom']['id'], array('controller' => 'uoms', 'action' => 'view', $estiminationDet['Uom']['id'])); ?>
		</td>
		<td><?php echo h($estiminationDet['EstiminationDet']['estim_value']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $estiminationDet['EstiminationDet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $estiminationDet['EstiminationDet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estiminationDet['EstiminationDet']['id']), null, __('Are you sure you want to delete # %s?', $estiminationDet['EstiminationDet']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Estimination Det'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Estimations'), array('controller' => 'estimations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimation'), array('controller' => 'estimations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estim Classes'), array('controller' => 'estim_classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estim Class'), array('controller' => 'estim_classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uoms'), array('controller' => 'uoms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uom'), array('controller' => 'uoms', 'action' => 'add')); ?> </li>
	</ul>
</div>
