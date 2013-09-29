<div class="grnDets index">
	<h2><?php echo __('Grn Dets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('grn_id'); ?></th>
			<th><?php echo $this->Paginator->sort('po_det_id'); ?></th>
			<th><?php echo $this->Paginator->sort('qty'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('tot_price'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_comb_id'); ?></th>
			<th><?php echo $this->Paginator->sort('approval'); ?></th>
			<th><?php echo $this->Paginator->sort('approval_register_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($grnDets as $grnDet): ?>
	<tr>
		<td><?php echo h($grnDet['GrnDet']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($grnDet['Grn']['id'], array('controller' => 'grns', 'action' => 'view', $grnDet['Grn']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($grnDet['PoDet']['id'], array('controller' => 'po_dets', 'action' => 'view', $grnDet['PoDet']['id'])); ?>
		</td>
		<td><?php echo h($grnDet['GrnDet']['qty']); ?>&nbsp;</td>
		<td><?php echo h($grnDet['GrnDet']['price']); ?>&nbsp;</td>
		<td><?php echo h($grnDet['GrnDet']['tot_price']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($grnDet['TaxComb']['id'], array('controller' => 'tax_combs', 'action' => 'view', $grnDet['TaxComb']['id'])); ?>
		</td>
		<td><?php echo h($grnDet['GrnDet']['approval']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($grnDet['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $grnDet['ApprovalRegister']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $grnDet['GrnDet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $grnDet['GrnDet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $grnDet['GrnDet']['id']), null, __('Are you sure you want to delete # %s?', $grnDet['GrnDet']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Grn Det'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Grns'), array('controller' => 'grns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grn'), array('controller' => 'grns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Po Dets'), array('controller' => 'po_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Po Det'), array('controller' => 'po_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Combs'), array('controller' => 'tax_combs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Comb'), array('controller' => 'tax_combs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
	</ul>
</div>
