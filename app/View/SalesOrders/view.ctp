<div class="salesOrders view">
<h2><?php  echo __('Sales Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($salesOrder['SalesOrder']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salesOrder['Location']['name'], array('controller' => 'locations', 'action' => 'view', $salesOrder['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sales Order No'); ?></dt>
		<dd>
			<?php echo h($salesOrder['SalesOrder']['sales_order_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salesOrder['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $salesOrder['Partner']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quotation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salesOrder['Quotation']['id'], array('controller' => 'quotations', 'action' => 'view', $salesOrder['Quotation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Po Date'); ?></dt>
		<dd>
			<?php echo h($salesOrder['SalesOrder']['po_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('So Date'); ?></dt>
		<dd>
			<?php echo h($salesOrder['SalesOrder']['so_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Term'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salesOrder['Term']['name'], array('controller' => 'terms', 'action' => 'view', $salesOrder['Term']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pay Term'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salesOrder['PayTerm']['name'], array('controller' => 'pay_terms', 'action' => 'view', $salesOrder['PayTerm']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sale Eng'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salesOrder['SaleEng']['id'], array('controller' => 'sale_engs', 'action' => 'view', $salesOrder['SaleEng']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salesOrder['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $salesOrder['FinYear']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval'); ?></dt>
		<dd>
			<?php echo h($salesOrder['SalesOrder']['approval']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval Register'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salesOrder['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $salesOrder['ApprovalRegister']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($salesOrder['SalesOrder']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($salesOrder['SalesOrder']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($salesOrder['SalesOrder']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($salesOrder['SalesOrder']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sales Order'), array('action' => 'edit', $salesOrder['SalesOrder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sales Order'), array('action' => 'delete', $salesOrder['SalesOrder']['id']), null, __('Are you sure you want to delete # %s?', $salesOrder['SalesOrder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Order'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Del Chalans'); ?></h3>
	<?php if (!empty($salesOrder['DelChalan'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Del Chal No'); ?></th>
		<th><?php echo __('Partner Id'); ?></th>
		<th><?php echo __('Sales Order Id'); ?></th>
		<th><?php echo __('Delv Date'); ?></th>
		<th><?php echo __('Del Desc'); ?></th>
		<th><?php echo __('Del Approval'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($salesOrder['DelChalan'] as $delChalan): ?>
		<tr>
			<td><?php echo $delChalan['id']; ?></td>
			<td><?php echo $delChalan['location_id']; ?></td>
			<td><?php echo $delChalan['del_chal_no']; ?></td>
			<td><?php echo $delChalan['partner_id']; ?></td>
			<td><?php echo $delChalan['sales_order_id']; ?></td>
			<td><?php echo $delChalan['delv_date']; ?></td>
			<td><?php echo $delChalan['del_desc']; ?></td>
			<td><?php echo $delChalan['del_approval']; ?></td>
			<td><?php echo $delChalan['fin_year_id']; ?></td>
			<td><?php echo $delChalan['creat_on']; ?></td>
			<td><?php echo $delChalan['creat_by']; ?></td>
			<td><?php echo $delChalan['mod_on']; ?></td>
			<td><?php echo $delChalan['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'del_chalans', 'action' => 'view', $delChalan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'del_chalans', 'action' => 'edit', $delChalan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'del_chalans', 'action' => 'delete', $delChalan['id']), null, __('Are you sure you want to delete # %s?', $delChalan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Del Chalan'), array('controller' => 'del_chalans', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sales Invs'); ?></h3>
	<?php if (!empty($salesOrder['SalesInv'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Invoice No'); ?></th>
		<th><?php echo __('Partner Id'); ?></th>
		<th><?php echo __('Sales Order Id'); ?></th>
		<th><?php echo __('Inv Date'); ?></th>
		<th><?php echo __('Inv Desc'); ?></th>
		<th><?php echo __('Tot Value'); ?></th>
		<th><?php echo __('Tot Taxes'); ?></th>
		<th><?php echo __('Tot Inv'); ?></th>
		<th><?php echo __('Del Chalan Id'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($salesOrder['SalesInv'] as $salesInv): ?>
		<tr>
			<td><?php echo $salesInv['id']; ?></td>
			<td><?php echo $salesInv['location_id']; ?></td>
			<td><?php echo $salesInv['invoice_no']; ?></td>
			<td><?php echo $salesInv['partner_id']; ?></td>
			<td><?php echo $salesInv['sales_order_id']; ?></td>
			<td><?php echo $salesInv['inv_date']; ?></td>
			<td><?php echo $salesInv['inv_desc']; ?></td>
			<td><?php echo $salesInv['tot_value']; ?></td>
			<td><?php echo $salesInv['tot_taxes']; ?></td>
			<td><?php echo $salesInv['tot_inv']; ?></td>
			<td><?php echo $salesInv['del_chalan_id']; ?></td>
			<td><?php echo $salesInv['fin_year_id']; ?></td>
			<td><?php echo $salesInv['creat_on']; ?></td>
			<td><?php echo $salesInv['creat_by']; ?></td>
			<td><?php echo $salesInv['mod_on']; ?></td>
			<td><?php echo $salesInv['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sales_invs', 'action' => 'view', $salesInv['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sales_invs', 'action' => 'edit', $salesInv['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sales_invs', 'action' => 'delete', $salesInv['id']), null, __('Are you sure you want to delete # %s?', $salesInv['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sales Inv'), array('controller' => 'sales_invs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related So Dets'); ?></h3>
	<?php if (!empty($salesOrder['SoDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Sales Order Id'); ?></th>
		<th><?php echo __('Item Code Id'); ?></th>
		<th><?php echo __('Uom Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Tot Price'); ?></th>
		<th><?php echo __('Approval'); ?></th>
		<th><?php echo __('Approval Register Id'); ?></th>
		<th><?php echo __('Tax Comb Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($salesOrder['SoDet'] as $soDet): ?>
		<tr>
			<td><?php echo $soDet['id']; ?></td>
			<td><?php echo $soDet['sales_order_id']; ?></td>
			<td><?php echo $soDet['item_code_id']; ?></td>
			<td><?php echo $soDet['uom_id']; ?></td>
			<td><?php echo $soDet['qty']; ?></td>
			<td><?php echo $soDet['price']; ?></td>
			<td><?php echo $soDet['tot_price']; ?></td>
			<td><?php echo $soDet['approval']; ?></td>
			<td><?php echo $soDet['approval_register_id']; ?></td>
			<td><?php echo $soDet['tax_comb_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'so_dets', 'action' => 'view', $soDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'so_dets', 'action' => 'edit', $soDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'so_dets', 'action' => 'delete', $soDet['id']), null, __('Are you sure you want to delete # %s?', $soDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New So Det'), array('controller' => 'so_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Work Orders'); ?></h3>
	<?php if (!empty($salesOrder['WorkOrder'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Wo No'); ?></th>
		<th><?php echo __('Sales Order Id'); ?></th>
		<th><?php echo __('Wo Date'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Wo Item Qty'); ?></th>
		<th><?php echo __('Mould Det Id'); ?></th>
		<th><?php echo __('So Det Id'); ?></th>
		<th><?php echo __('Order Complete'); ?></th>
		<th><?php echo __('Target Date'); ?></th>
		<th><?php echo __('Outsource'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Approval'); ?></th>
		<th><?php echo __('Approval Register Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($salesOrder['WorkOrder'] as $workOrder): ?>
		<tr>
			<td><?php echo $workOrder['id']; ?></td>
			<td><?php echo $workOrder['location_id']; ?></td>
			<td><?php echo $workOrder['wo_no']; ?></td>
			<td><?php echo $workOrder['sales_order_id']; ?></td>
			<td><?php echo $workOrder['wo_date']; ?></td>
			<td><?php echo $workOrder['item_id']; ?></td>
			<td><?php echo $workOrder['wo_item_qty']; ?></td>
			<td><?php echo $workOrder['mould_det_id']; ?></td>
			<td><?php echo $workOrder['so_det_id']; ?></td>
			<td><?php echo $workOrder['order_complete']; ?></td>
			<td><?php echo $workOrder['target_date']; ?></td>
			<td><?php echo $workOrder['outsource']; ?></td>
			<td><?php echo $workOrder['fin_year_id']; ?></td>
			<td><?php echo $workOrder['approval']; ?></td>
			<td><?php echo $workOrder['approval_register_id']; ?></td>
			<td><?php echo $workOrder['creat_on']; ?></td>
			<td><?php echo $workOrder['creat_by']; ?></td>
			<td><?php echo $workOrder['mod_on']; ?></td>
			<td><?php echo $workOrder['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'work_orders', 'action' => 'view', $workOrder['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'work_orders', 'action' => 'edit', $workOrder['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'work_orders', 'action' => 'delete', $workOrder['id']), null, __('Are you sure you want to delete # %s?', $workOrder['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Work Order'), array('controller' => 'work_orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
