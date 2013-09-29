<div class="payTerms index">
	<h2><?php echo __('Pay Terms'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('term_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('no_day'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($payTerms as $payTerm): ?>
	<tr>
		<td><?php echo h($payTerm['PayTerm']['id']); ?>&nbsp;</td>
		<td><?php echo h($payTerm['PayTerm']['name']); ?>&nbsp;</td>
		<td><?php echo h($payTerm['PayTerm']['term_desc']); ?>&nbsp;</td>
		<td><?php echo h($payTerm['PayTerm']['no_day']); ?>&nbsp;</td>
		<td><?php echo h($payTerm['PayTerm']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($payTerm['PayTerm']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($payTerm['PayTerm']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($payTerm['PayTerm']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $payTerm['PayTerm']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $payTerm['PayTerm']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $payTerm['PayTerm']['id']), null, __('Are you sure you want to delete # %s?', $payTerm['PayTerm']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Pay Term'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotations'), array('controller' => 'quotations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quotation'), array('controller' => 'quotations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Orders'), array('controller' => 'sales_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Order'), array('controller' => 'sales_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
