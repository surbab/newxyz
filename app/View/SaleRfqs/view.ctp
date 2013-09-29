<div class="purchaseorders view">
<h2><?php  echo __('PurchaseOrder'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>m
			<?php echo h($purchaseorder['PurchaseOrder']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($purchaseorder['Location']['name'], array('controller' => 'locations', 'action' => 'view', $purchaseorder['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PurchaseOrder No'); ?></dt>
		<dd>
			<?php echo h($purchaseorder['PurchaseOrder']['po_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PurchaseOrder Date'); ?></dt>
		<dd>
			<?php echo h($purchaseorder['PurchaseOrder']['po_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quotation Reference'); ?></dt>
		<dd>
			<?php echo h($purchaseorder['PurchaseOrder']['qtn_ref']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quotation Date'); ?></dt>
		<dd>
			<?php echo h($purchaseorder['PurchaseOrder']['qtn_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Financial Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($purchaseorder['FinYear']['fin_year'], array('controller' => 'fin_years', 'action' => 'view', $purchaseorder['FinYear']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pay Terms'); ?></dt>
		<dd>
			<?php echo $this->Html->link($purchaseorder['PayTerm']['term_desc'], array('controller' => 'pay_terms', 'action' => 'view', $purchaseorder['PayTerm']['id'])); ?>
			&nbsp;
		</dd>
	
		<div class='wrapper'>
		<p>
		&nbsp;
		&nbsp;
		<p>
		<table border='1'; cellpadding='0'; cellspacing='0'>
		<dt>
<td><?php echo __('Id'); ?></td>
<td><?php echo __('Purchase Order Id'); ?></td>
<td><?php echo __('Item Code Id'); ?></td>
<td><?php echo __('Uom Id'); ?></td>
<td><?php echo __('Quantity'); ?></td>
<td><?php echo __('Price'); ?></td>
<td><?php echo __('Total Price'); ?></td>
<td><?php echo __('Tax'); ?></td>
<td><?php echo __('Total Price'); ?></td>
</dt>
	<?php
	
	
	
			$i = 0;
	
		foreach ($purchaseorder['PoDet'] as $poDet): 

		?>
		<tr>
			<td><?php echo $poDet['id']; ?></td>
			<td><?php echo $poDet['purchase_order_id']; ?></td>
			<td><?php echo $poDet['item_code_id']; ?></td>
			<td><?php echo $poDet['uom_id']; ?></td>		
			<td><?php echo $poDet['qty']; ?></td>
			<td><?php echo $poDet['price']; ?></td>
			<td><?php echo $poDet['tot_price']; ?></td>
			<td><?php echo $poDet['tax']; ?></td>
			<td><?php echo $poDet['gtotprice']; ?></td>
			
		</tr>
		
	<?php endforeach; ?>
		</table>
		</div>

		
		
		<dt><?php echo __('Purchase Order Description'); ?></dt>
		<dd>
			<?php echo h($purchaseorder['PurchaseOrder']['po_desc']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($purchaseorder['PurchaseOrder']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($purchaseorder['PurchaseOrder']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($purchaseorder['PurchaseOrder']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($purchaseorder['PurchaseOrder']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit PurchaseOrder'), array('action' => 'edit', $purchaseorder['PurchaseOrder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete PurchaseOrder'), array('action' => 'delete', $purchaseorder['PurchaseOrder']['id']), null, __('Are you sure you want to delete # %s?', $purchaseorder['PurchaseOrder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List PurchaseOrders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New PurchaseOrder'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List PurchaseOrder Dets'), array('controller' => 'purchaseorder_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New PurchaseOrder Det'), array('controller' => 'purchaseorder_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related PurchaseOrder Dets'); ?></h3>
	<?php if (!empty($purchaseorder['PurchaseOrderDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('PurchaseOrder Id'); ?></th>
		<th><?php echo __('Account To'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($purchaseorder['PurchaseOrderDet'] as $purchaseorderDet): ?>
		<tr>
			<td><?php echo $purchaseorderDet['id']; ?></td>
			<td><?php echo $purchaseorderDet['purchaseorder_id']; ?></td>
			<td><?php echo $purchaseorderDet['account_to']; ?></td>
			<td><?php echo $purchaseorderDet['amount']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'purchaseorder_dets', 'action' => 'view', $purchaseorderDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'purchaseorder_dets', 'action' => 'edit', $purchaseorderDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'purchaseorder_dets', 'action' => 'delete', $purchaseorderDet['id']), null, __('Are you sure you want to delete # %s?', $purchaseorderDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New PurchaseOrder Det'), array('controller' => 'purchaseorder_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
