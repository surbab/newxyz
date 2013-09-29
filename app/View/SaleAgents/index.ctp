<div class="saleAgents index">
	<h2><?php echo __('Sale Agents'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sale_region_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sale_comm_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($saleAgents as $saleAgent): ?>
	<tr>
		<td><?php echo h($saleAgent['SaleAgent']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($saleAgent['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $saleAgent['Partner']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($saleAgent['SaleRegion']['id'], array('controller' => 'sale_regions', 'action' => 'view', $saleAgent['SaleRegion']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($saleAgent['SaleComm']['id'], array('controller' => 'sale_comms', 'action' => 'view', $saleAgent['SaleComm']['id'])); ?>
		</td>
		<td><?php echo h($saleAgent['SaleAgent']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($saleAgent['SaleAgent']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($saleAgent['SaleAgent']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($saleAgent['SaleAgent']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $saleAgent['SaleAgent']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $saleAgent['SaleAgent']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $saleAgent['SaleAgent']['id']), null, __('Are you sure you want to delete # %s?', $saleAgent['SaleAgent']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sale Agent'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Regions'), array('controller' => 'sale_regions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Region'), array('controller' => 'sale_regions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Comms'), array('controller' => 'sale_comms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Comm'), array('controller' => 'sale_comms', 'action' => 'add')); ?> </li>
	</ul>
</div>
