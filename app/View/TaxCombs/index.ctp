<div class="taxCombs index">
	<h2><?php echo __('Tax Combs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_description'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_fr'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_to'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($taxCombs as $taxComb): ?>
	<tr>
		<td><?php echo h($taxComb['TaxComb']['id']); ?>&nbsp;</td>
		<td><?php echo h($taxComb['TaxComb']['tax_description']); ?>&nbsp;</td>
		<td><?php echo h($taxComb['TaxComb']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($taxComb['TaxComb']['effective_fr']); ?>&nbsp;</td>
		<td><?php echo h($taxComb['TaxComb']['effective_to']); ?>&nbsp;</td>
		<td><?php echo h($taxComb['TaxComb']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($taxComb['TaxComb']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($taxComb['TaxComb']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($taxComb['TaxComb']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $taxComb['TaxComb']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $taxComb['TaxComb']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $taxComb['TaxComb']['id']), null, __('Are you sure you want to delete # %s?', $taxComb['TaxComb']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tax Comb'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pur Inv Dets'), array('controller' => 'pur_inv_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pur Inv Det'), array('controller' => 'pur_inv_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sal Inv Dets'), array('controller' => 'sal_inv_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sal Inv Det'), array('controller' => 'sal_inv_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List So Dets'), array('controller' => 'so_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New So Det'), array('controller' => 'so_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Comb Dets'), array('controller' => 'tax_comb_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Comb Det'), array('controller' => 'tax_comb_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
