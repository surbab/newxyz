<div class="estimations index">
	<h2><?php echo __('Estimations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_code_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sale_rfq_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sale_rfq_det_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estim_value'); ?></th>
			<th><?php echo $this->Paginator->sort('fin_year_id'); ?></th>
			<th><?php echo $this->Paginator->sort('approval'); ?></th>
			<th><?php echo $this->Paginator->sort('approval_register_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estimations as $estimation): ?>
	<tr>
		<td><?php echo h($estimation['Estimation']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estimation['Location']['name'], array('controller' => 'locations', 'action' => 'view', $estimation['Location']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($estimation['ItemCode']['id'], array('controller' => 'item_codes', 'action' => 'view', $estimation['ItemCode']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($estimation['SaleRfq']['id'], array('controller' => 'sale_rfqs', 'action' => 'view', $estimation['SaleRfq']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($estimation['SaleRfqDet']['id'], array('controller' => 'sale_rfq_dets', 'action' => 'view', $estimation['SaleRfqDet']['id'])); ?>
		</td>
		<td><?php echo h($estimation['Estimation']['estim_value']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estimation['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $estimation['FinYear']['id'])); ?>
		</td>
		<td><?php echo h($estimation['Estimation']['approval']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estimation['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $estimation['ApprovalRegister']['id'])); ?>
		</td>
		<td><?php echo h($estimation['Estimation']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($estimation['Estimation']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($estimation['Estimation']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($estimation['Estimation']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $estimation['Estimation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $estimation['Estimation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estimation['Estimation']['id']), null, __('Are you sure you want to delete # %s?', $estimation['Estimation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Estimation'), array('action' => 'add')); ?></li>
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
