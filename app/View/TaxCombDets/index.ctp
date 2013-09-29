<div class="taxCombDets index">
	<h2><?php echo __('Tax Comb Dets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_comb_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_type_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($taxCombDets as $taxCombDet): ?>
	<tr>
		<td><?php echo h($taxCombDet['TaxCombDet']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($taxCombDet['TaxComb']['id'], array('controller' => 'tax_combs', 'action' => 'view', $taxCombDet['TaxComb']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($taxCombDet['TaxType']['id'], array('controller' => 'tax_types', 'action' => 'view', $taxCombDet['TaxType']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $taxCombDet['TaxCombDet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $taxCombDet['TaxCombDet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $taxCombDet['TaxCombDet']['id']), null, __('Are you sure you want to delete # %s?', $taxCombDet['TaxCombDet']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tax Comb Det'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tax Combs'), array('controller' => 'tax_combs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Comb'), array('controller' => 'tax_combs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Types'), array('controller' => 'tax_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Type'), array('controller' => 'tax_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
