<div class="taxTypes index">
	<h2><?php echo __('Tax Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_type'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_perc'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_active'); ?></th>
			<th><?php echo $this->Paginator->sort('is_tax_on'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_on'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_fr'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_to'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($taxTypes as $taxType): ?>
	<tr>
		<td><?php echo h($taxType['TaxType']['id']); ?>&nbsp;</td>
		<td><?php echo h($taxType['TaxType']['tax_type']); ?>&nbsp;</td>
		<td><?php echo h($taxType['TaxType']['tax_perc']); ?>&nbsp;</td>
		<td><?php echo h($taxType['TaxType']['tax_active']); ?>&nbsp;</td>
		<td><?php echo h($taxType['TaxType']['is_tax_on']); ?>&nbsp;</td>
		<td><?php echo h($taxType['TaxType']['tax_on']); ?>&nbsp;</td>
		<td><?php echo h($taxType['TaxType']['effective_fr']); ?>&nbsp;</td>
		<td><?php echo h($taxType['TaxType']['effective_to']); ?>&nbsp;</td>
		<td><?php echo h($taxType['TaxType']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($taxType['TaxType']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($taxType['TaxType']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($taxType['TaxType']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $taxType['TaxType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $taxType['TaxType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $taxType['TaxType']['id']), null, __('Are you sure you want to delete # %s?', $taxType['TaxType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tax Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tax Comb Dets'), array('controller' => 'tax_comb_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Comb Det'), array('controller' => 'tax_comb_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
