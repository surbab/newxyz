<div class="payments index">
	<h2><?php echo __('Payments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_no'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_date'); ?></th>
			<th><?php echo $this->Paginator->sort('account_id'); ?></th>
			<th><?php echo $this->Paginator->sort('desc'); ?></th>
			<th><?php echo $this->Paginator->sort('tot_value'); ?></th>
			<th><?php echo $this->Paginator->sort('fin_year_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($payments as $payment): ?>
	<tr>
		<td><?php echo h($payment['Payment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($payment['Location']['name'], array('controller' => 'locations', 'action' => 'view', $payment['Location']['id'])); ?>
		</td>
		<td><?php echo h($payment['Payment']['payment_no']); ?>&nbsp;</td>
		<td><?php echo h($payment['Payment']['payment_date']); ?>&nbsp;</td>
		<td><?php echo h($payment['Payment']['account_id']); ?>&nbsp;</td>
		<td><?php echo h($payment['Payment']['desc']); ?>&nbsp;</td>
		<td><?php echo h($payment['Payment']['tot_value']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($payment['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $payment['FinYear']['id'])); ?>
		</td>
		<td><?php echo h($payment['Payment']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($payment['Payment']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($payment['Payment']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($payment['Payment']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $payment['Payment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $payment['Payment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $payment['Payment']['id']), null, __('Are you sure you want to delete # %s?', $payment['Payment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Payment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Dets'), array('controller' => 'payment_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Det'), array('controller' => 'payment_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
