<div class="saleComms index">
	<h2><?php echo __('Sale Comms'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sale_comm'); ?></th>
			<th><?php echo $this->Paginator->sort('comm_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($saleComms as $saleComm): ?>
	<tr>
		<td><?php echo h($saleComm['SaleComm']['id']); ?>&nbsp;</td>
		<td><?php echo h($saleComm['SaleComm']['sale_comm']); ?>&nbsp;</td>
		<td><?php echo h($saleComm['SaleComm']['comm_rate']); ?>&nbsp;</td>
		<td><?php echo h($saleComm['SaleComm']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($saleComm['SaleComm']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($saleComm['SaleComm']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($saleComm['SaleComm']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $saleComm['SaleComm']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $saleComm['SaleComm']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $saleComm['SaleComm']['id']), null, __('Are you sure you want to delete # %s?', $saleComm['SaleComm']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sale Comm'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sale Agents'), array('controller' => 'sale_agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Agent'), array('controller' => 'sale_agents', 'action' => 'add')); ?> </li>
	</ul>
</div>
