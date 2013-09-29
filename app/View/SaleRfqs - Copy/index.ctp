<div class="saleRfqs index">
	<h2><?php echo __('Sale Rfqs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rfq_no'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rfq_date'); ?></th>
			<th><?php echo $this->Paginator->sort('fin_year_id'); ?></th>
			<th><?php echo $this->Paginator->sort('approval'); ?></th>
			<th><?php echo $this->Paginator->sort('approval_register_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($saleRfqs as $saleRfq): ?>
	<tr>
		<td><?php echo h($saleRfq['SaleRfq']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($saleRfq['Location']['name'], array('controller' => 'locations', 'action' => 'view', $saleRfq['Location']['id'])); ?>
		</td>
		<td><?php echo h($saleRfq['SaleRfq']['rfq_no']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($saleRfq['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $saleRfq['Partner']['id'])); ?>
		</td>
		<td><?php echo h($saleRfq['SaleRfq']['rfq_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($saleRfq['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $saleRfq['FinYear']['id'])); ?>
		</td>
		<td><?php echo h($saleRfq['SaleRfq']['approval']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($saleRfq['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $saleRfq['ApprovalRegister']['id'])); ?>
		</td>
		<td><?php echo h($saleRfq['SaleRfq']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($saleRfq['SaleRfq']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($saleRfq['SaleRfq']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($saleRfq['SaleRfq']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $saleRfq['SaleRfq']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $saleRfq['SaleRfq']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $saleRfq['SaleRfq']['id']), null, __('Are you sure you want to delete # %s?', $saleRfq['SaleRfq']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sale Rfq'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
	</ul>
</div>
