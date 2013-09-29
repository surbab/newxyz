<div class="locations index">
	<h2><?php echo __('Locations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('loc_name'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('add_1'); ?></th>
			<th><?php echo $this->Paginator->sort('add_2'); ?></th>
			<th><?php echo $this->Paginator->sort('post'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('district'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pin_code'); ?></th>
			<th><?php echo $this->Paginator->sort('tel_1'); ?></th>
			<th><?php echo $this->Paginator->sort('tel_2'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('web'); ?></th>
			<th><?php echo $this->Paginator->sort('ven_cont'); ?></th>
			<th><?php echo $this->Paginator->sort('cont_tel_1'); ?></th>
			<th><?php echo $this->Paginator->sort('cont_email'); ?></th>
			<th><?php echo $this->Paginator->sort('vat_tin'); ?></th>
			<th><?php echo $this->Paginator->sort('cst_no'); ?></th>
			<th><?php echo $this->Paginator->sort('exc_no'); ?></th>
			<th><?php echo $this->Paginator->sort('serv_tax_no'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($locations as $location): ?>
	<tr>
		<td><?php echo h($location['Location']['id']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['loc_name']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['name']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['add_1']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['add_2']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['post']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['city']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['district']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($location['State']['name'], array('controller' => 'states', 'action' => 'view', $location['State']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($location['Country']['name'], array('controller' => 'countries', 'action' => 'view', $location['Country']['id'])); ?>
		</td>
		<td><?php echo h($location['Location']['pin_code']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['tel_1']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['tel_2']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['fax']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['email']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['web']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['ven_cont']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['cont_tel_1']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['cont_email']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['vat_tin']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['cst_no']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['exc_no']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['serv_tax_no']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $location['Location']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $location['Location']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $location['Location']['id']), null, __('Are you sure you want to delete # %s?', $location['Location']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Location'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Codes'), array('controller' => 'asset_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Code'), array('controller' => 'asset_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bank Accs'), array('controller' => 'bank_accs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Acc'), array('controller' => 'bank_accs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cash Accs'), array('controller' => 'cash_accs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash Acc'), array('controller' => 'cash_accs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contras'), array('controller' => 'contras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contra'), array('controller' => 'contras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Del Chalans'), array('controller' => 'del_chalans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Del Chalan'), array('controller' => 'del_chalans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimations'), array('controller' => 'estimations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimation'), array('controller' => 'estimations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grns'), array('controller' => 'grns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grn'), array('controller' => 'grns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Journals'), array('controller' => 'journals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journal'), array('controller' => 'journals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mat Accs'), array('controller' => 'mat_accs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mat Acc'), array('controller' => 'mat_accs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Rework Histories'), array('controller' => 'mould_rework_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Rework History'), array('controller' => 'mould_rework_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pur Inv Entries'), array('controller' => 'pur_inv_entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pur Inv Entry'), array('controller' => 'pur_inv_entries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotations'), array('controller' => 'quotations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quotation'), array('controller' => 'quotations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Receipts'), array('controller' => 'receipts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receipt'), array('controller' => 'receipts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Rfqs'), array('controller' => 'sale_rfqs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Rfq'), array('controller' => 'sale_rfqs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Invs'), array('controller' => 'sales_invs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Inv'), array('controller' => 'sales_invs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Orders'), array('controller' => 'sales_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Order'), array('controller' => 'sales_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Accs'), array('controller' => 'tax_accs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Acc'), array('controller' => 'tax_accs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wo Prod Det Men'), array('controller' => 'wo_prod_det_men', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wo Prod Det Man'), array('controller' => 'wo_prod_det_men', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Work Orders'), array('controller' => 'work_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work Order'), array('controller' => 'work_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Workflows'), array('controller' => 'workflows', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Workflow'), array('controller' => 'workflows', 'action' => 'add')); ?> </li>
	</ul>
</div>
