<div class="estimations view">
<h2><?php  echo __('Estimation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estimation['Estimation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estimation['Location']['name'], array('controller' => 'locations', 'action' => 'view', $estimation['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Code'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estimation['ItemCode']['id'], array('controller' => 'item_codes', 'action' => 'view', $estimation['ItemCode']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sale Rfq'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estimation['SaleRfq']['id'], array('controller' => 'sale_rfqs', 'action' => 'view', $estimation['SaleRfq']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sale Rfq Det'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estimation['SaleRfqDet']['id'], array('controller' => 'sale_rfq_dets', 'action' => 'view', $estimation['SaleRfqDet']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estim Value'); ?></dt>
		<dd>
			<?php echo h($estimation['Estimation']['estim_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estimation['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $estimation['FinYear']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval'); ?></dt>
		<dd>
			<?php echo h($estimation['Estimation']['approval']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval Register'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estimation['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $estimation['ApprovalRegister']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($estimation['Estimation']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($estimation['Estimation']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($estimation['Estimation']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($estimation['Estimation']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estimation'), array('action' => 'edit', $estimation['Estimation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estimation'), array('action' => 'delete', $estimation['Estimation']['id']), null, __('Are you sure you want to delete # %s?', $estimation['Estimation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Rfqs'), array('controller' => 'sale_rfqs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Rfq'), array('controller' => 'sale_rfqs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Rfq Dets'), array('controller' => 'sale_rfq_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Rfq Det'), array('controller' => 'sale_rfq_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimination Dets'), array('controller' => 'estimination_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimination Det'), array('controller' => 'estimination_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotations'), array('controller' => 'quotations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quotation'), array('controller' => 'quotations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Estimination Dets'); ?></h3>
	<?php if (!empty($estimation['EstiminationDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estimation Id'); ?></th>
		<th><?php echo __('Estim Class Id'); ?></th>
		<th><?php echo __('Estim Qty'); ?></th>
		<th><?php echo __('Uom Id'); ?></th>
		<th><?php echo __('Estim Value'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($estimation['EstiminationDet'] as $estiminationDet): ?>
		<tr>
			<td><?php echo $estiminationDet['id']; ?></td>
			<td><?php echo $estiminationDet['estimation_id']; ?></td>
			<td><?php echo $estiminationDet['estim_class_id']; ?></td>
			<td><?php echo $estiminationDet['estim_qty']; ?></td>
			<td><?php echo $estiminationDet['uom_id']; ?></td>
			<td><?php echo $estiminationDet['estim_value']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'estimination_dets', 'action' => 'view', $estiminationDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'estimination_dets', 'action' => 'edit', $estiminationDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'estimination_dets', 'action' => 'delete', $estiminationDet['id']), null, __('Are you sure you want to delete # %s?', $estiminationDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Estimination Det'), array('controller' => 'estimination_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Quotations'); ?></h3>
	<?php if (!empty($estimation['Quotation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Quote No'); ?></th>
		<th><?php echo __('Vendor Id'); ?></th>
		<th><?php echo __('Rfq Id'); ?></th>
		<th><?php echo __('Quote Date'); ?></th>
		<th><?php echo __('Term Id'); ?></th>
		<th><?php echo __('Pay Term Id'); ?></th>
		<th><?php echo __('Sales Eng Id'); ?></th>
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
		foreach ($estimation['Quotation'] as $quotation): ?>
		<tr>
			<td><?php echo $quotation['id']; ?></td>
			<td><?php echo $quotation['location_id']; ?></td>
			<td><?php echo $quotation['quote_no']; ?></td>
			<td><?php echo $quotation['vendor_id']; ?></td>
			<td><?php echo $quotation['rfq_id']; ?></td>
			<td><?php echo $quotation['quote_date']; ?></td>
			<td><?php echo $quotation['term_id']; ?></td>
			<td><?php echo $quotation['pay_term_id']; ?></td>
			<td><?php echo $quotation['sales_eng_id']; ?></td>
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
	<h3><?php echo __('Related Sale Rfq Dets'); ?></h3>
	<?php if (!empty($estimation['SaleRfqDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Sale Rfq Id'); ?></th>
		<th><?php echo __('Item Name'); ?></th>
		<th><?php echo __('Item Desc'); ?></th>
		<th><?php echo __('Rfq Qty'); ?></th>
		<th><?php echo __('Rfq Comments'); ?></th>
		<th><?php echo __('Estimation Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($estimation['SaleRfqDet'] as $saleRfqDet): ?>
		<tr>
			<td><?php echo $saleRfqDet['id']; ?></td>
			<td><?php echo $saleRfqDet['sale_rfq_id']; ?></td>
			<td><?php echo $saleRfqDet['item_name']; ?></td>
			<td><?php echo $saleRfqDet['item_desc']; ?></td>
			<td><?php echo $saleRfqDet['rfq_qty']; ?></td>
			<td><?php echo $saleRfqDet['rfq_comments']; ?></td>
			<td><?php echo $saleRfqDet['estimation_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sale_rfq_dets', 'action' => 'view', $saleRfqDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sale_rfq_dets', 'action' => 'edit', $saleRfqDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sale_rfq_dets', 'action' => 'delete', $saleRfqDet['id']), null, __('Are you sure you want to delete # %s?', $saleRfqDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sale Rfq Det'), array('controller' => 'sale_rfq_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
