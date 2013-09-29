<div class="payTerms view">
<h2><?php  echo __('Pay Term'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($payTerm['PayTerm']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($payTerm['PayTerm']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Term Desc'); ?></dt>
		<dd>
			<?php echo h($payTerm['PayTerm']['term_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Day'); ?></dt>
		<dd>
			<?php echo h($payTerm['PayTerm']['no_day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($payTerm['PayTerm']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($payTerm['PayTerm']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($payTerm['PayTerm']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($payTerm['PayTerm']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pay Term'), array('action' => 'edit', $payTerm['PayTerm']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pay Term'), array('action' => 'delete', $payTerm['PayTerm']['id']), null, __('Are you sure you want to delete # %s?', $payTerm['PayTerm']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pay Terms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pay Term'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchase Orders'), array('controller' => 'purchase_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotations'), array('controller' => 'quotations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quotation'), array('controller' => 'quotations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Orders'), array('controller' => 'sales_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Order'), array('controller' => 'sales_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Purchase Orders'); ?></h3>
	<?php if (!empty($payTerm['PurchaseOrder'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Po No'); ?></th>
		<th><?php echo __('Partner Id'); ?></th>
		<th><?php echo __('Qtn Ref'); ?></th>
		<th><?php echo __('Qtn Date'); ?></th>
		<th><?php echo __('Po Date'); ?></th>
		<th><?php echo __('Po Desc'); ?></th>
		<th><?php echo __('Pay Term Id'); ?></th>
		<th><?php echo __('Bill Id'); ?></th>
		<th><?php echo __('Del Id'); ?></th>
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
		foreach ($payTerm['PurchaseOrder'] as $purchaseOrder): ?>
		<tr>
			<td><?php echo $purchaseOrder['id']; ?></td>
			<td><?php echo $purchaseOrder['location_id']; ?></td>
			<td><?php echo $purchaseOrder['po_no']; ?></td>
			<td><?php echo $purchaseOrder['partner_id']; ?></td>
			<td><?php echo $purchaseOrder['qtn_ref']; ?></td>
			<td><?php echo $purchaseOrder['qtn_date']; ?></td>
			<td><?php echo $purchaseOrder['po_date']; ?></td>
			<td><?php echo $purchaseOrder['po_desc']; ?></td>
			<td><?php echo $purchaseOrder['pay_term_id']; ?></td>
			<td><?php echo $purchaseOrder['bill_id']; ?></td>
			<td><?php echo $purchaseOrder['del_id']; ?></td>
			<td><?php echo $purchaseOrder['fin_year_id']; ?></td>
			<td><?php echo $purchaseOrder['approval']; ?></td>
			<td><?php echo $purchaseOrder['approval_register_id']; ?></td>
			<td><?php echo $purchaseOrder['creat_on']; ?></td>
			<td><?php echo $purchaseOrder['creat_by']; ?></td>
			<td><?php echo $purchaseOrder['mod_on']; ?></td>
			<td><?php echo $purchaseOrder['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'purchase_orders', 'action' => 'view', $purchaseOrder['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'purchase_orders', 'action' => 'edit', $purchaseOrder['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'purchase_orders', 'action' => 'delete', $purchaseOrder['id']), null, __('Are you sure you want to delete # %s?', $purchaseOrder['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Purchase Order'), array('controller' => 'purchase_orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Quotations'); ?></h3>
	<?php if (!empty($payTerm['Quotation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Quote No'); ?></th>
		<th><?php echo __('Partner Id'); ?></th>
		<th><?php echo __('Sale Rfq Id'); ?></th>
		<th><?php echo __('Quote Date'); ?></th>
		<th><?php echo __('Term Id'); ?></th>
		<th><?php echo __('Pay Term Id'); ?></th>
		<th><?php echo __('Sale Eng Id'); ?></th>
		<th><?php echo __('Fin Year Id'); ?></th>
		<th><?php echo __('Estimation Id'); ?></th>
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
		foreach ($payTerm['Quotation'] as $quotation): ?>
		<tr>
			<td><?php echo $quotation['id']; ?></td>
			<td><?php echo $quotation['location_id']; ?></td>
			<td><?php echo $quotation['quote_no']; ?></td>
			<td><?php echo $quotation['partner_id']; ?></td>
			<td><?php echo $quotation['sale_rfq_id']; ?></td>
			<td><?php echo $quotation['quote_date']; ?></td>
			<td><?php echo $quotation['term_id']; ?></td>
			<td><?php echo $quotation['pay_term_id']; ?></td>
			<td><?php echo $quotation['sale_eng_id']; ?></td>
			<td><?php echo $quotation['fin_year_id']; ?></td>
			<td><?php echo $quotation['estimation_id']; ?></td>
			<td><?php echo $quotation['approval']; ?></td>
			<td><?php echo $quotation['approval_register_id']; ?></td>
			<td><?php echo $quotation['creat_on']; ?></td>
			<td><?php echo $quotation['creat_by']; ?></td>
			<td><?php echo $quotation['mod_on']; ?></td>
			<td><?php echo $quotation['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'quotations', 'action' => 'view', $quotation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'quotations', 'action' => 'edit', $quotation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'quotations', 'action' => 'delete', $quotation['id']), null, __('Are you sure you want to delete # %s?', $quotation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Quotation'), array('controller' => 'quotations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sales Orders'); ?></h3>
	<?php if (!empty($payTerm['SalesOrder'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Sales Order No'); ?></th>
		<th><?php echo __('Partner Id'); ?></th>
		<th><?php echo __('Quotation Id'); ?></th>
		<th><?php echo __('Po Date'); ?></th>
		<th><?php echo __('So Date'); ?></th>
		<th><?php echo __('Term Id'); ?></th>
		<th><?php echo __('Pay Term Id'); ?></th>
		<th><?php echo __('Sale Eng Id'); ?></th>
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
		foreach ($payTerm['SalesOrder'] as $salesOrder): ?>
		<tr>
			<td><?php echo $salesOrder['id']; ?></td>
			<td><?php echo $salesOrder['location_id']; ?></td>
			<td><?php echo $salesOrder['sales_order_no']; ?></td>
			<td><?php echo $salesOrder['partner_id']; ?></td>
			<td><?php echo $salesOrder['quotation_id']; ?></td>
			<td><?php echo $salesOrder['po_date']; ?></td>
			<td><?php echo $salesOrder['so_date']; ?></td>
			<td><?php echo $salesOrder['term_id']; ?></td>
			<td><?php echo $salesOrder['pay_term_id']; ?></td>
			<td><?php echo $salesOrder['sale_eng_id']; ?></td>
			<td><?php echo $salesOrder['fin_year_id']; ?></td>
			<td><?php echo $salesOrder['approval']; ?></td>
			<td><?php echo $salesOrder['approval_register_id']; ?></td>
			<td><?php echo $salesOrder['creat_on']; ?></td>
			<td><?php echo $salesOrder['creat_by']; ?></td>
			<td><?php echo $salesOrder['mod_on']; ?></td>
			<td><?php echo $salesOrder['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sales_orders', 'action' => 'view', $salesOrder['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sales_orders', 'action' => 'edit', $salesOrder['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sales_orders', 'action' => 'delete', $salesOrder['id']), null, __('Are you sure you want to delete # %s?', $salesOrder['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sales Order'), array('controller' => 'sales_orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
