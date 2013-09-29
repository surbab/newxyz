<div class="salesOrders index">
	<h2><?php echo __('Sales Orders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sales_order_no'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quotation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('po_date'); ?></th>
			<th><?php echo $this->Paginator->sort('so_date'); ?></th>
			<th><?php echo $this->Paginator->sort('term_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pay_term_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sale_eng_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fin_year_id'); ?></th>
			<th><?php echo $this->Paginator->sort('approval'); ?></th>
			<th><?php echo $this->Paginator->sort('approval_register_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($salesOrders as $salesOrder): ?>
	<tr>
		<td><?php echo h($salesOrder['SalesOrder']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($salesOrder['Location']['name'], array('controller' => 'locations', 'action' => 'view', $salesOrder['Location']['id'])); ?>
		</td>
		<td><?php echo h($salesOrder['SalesOrder']['sales_order_no']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($salesOrder['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $salesOrder['Partner']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($salesOrder['Quotation']['id'], array('controller' => 'quotations', 'action' => 'view', $salesOrder['Quotation']['id'])); ?>
		</td>
		<td><?php echo h($salesOrder['SalesOrder']['po_date']); ?>&nbsp;</td>
		<td><?php echo h($salesOrder['SalesOrder']['so_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($salesOrder['Term']['name'], array('controller' => 'terms', 'action' => 'view', $salesOrder['Term']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($salesOrder['PayTerm']['name'], array('controller' => 'pay_terms', 'action' => 'view', $salesOrder['PayTerm']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($salesOrder['SaleEng']['id'], array('controller' => 'sale_engs', 'action' => 'view', $salesOrder['SaleEng']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($salesOrder['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $salesOrder['FinYear']['id'])); ?>
		</td>
		<td><?php echo h($salesOrder['SalesOrder']['approval']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($salesOrder['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $salesOrder['ApprovalRegister']['id'])); ?>
		</td>
		<td><?php echo h($salesOrder['SalesOrder']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($salesOrder['SalesOrder']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($salesOrder['SalesOrder']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($salesOrder['SalesOrder']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $salesOrder['SalesOrder']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $salesOrder['SalesOrder']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $salesOrder['SalesOrder']['id']), null, __('Are you sure you want to delete # %s?', $salesOrder['SalesOrder']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sales Order'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotations'), array('controller' => 'quotations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quotation'), array('controller' => 'quotations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terms'), array('controller' => 'terms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Term'), array('controller' => 'terms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pay Terms'), array('controller' => 'pay_terms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pay Term'), array('controller' => 'pay_terms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Engs'), array('controller' => 'sale_engs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Eng'), array('controller' => 'sale_engs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Del Chalans'), array('controller' => 'del_chalans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Del Chalan'), array('controller' => 'del_chalans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Invs'), array('controller' => 'sales_invs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Inv'), array('controller' => 'sales_invs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List So Dets'), array('controller' => 'so_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New So Det'), array('controller' => 'so_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Work Orders'), array('controller' => 'work_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work Order'), array('controller' => 'work_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
