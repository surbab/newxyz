<div class="delChalanDets index">
	<h2><?php echo __('Del Chalan Dets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('del_chalan_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_code_id'); ?></th>
			<th><?php echo $this->Paginator->sort('qty'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('tot_price'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_comb_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($delChalanDets as $delChalanDet): ?>
	<tr>
		<td><?php echo h($delChalanDet['DelChalanDet']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($delChalanDet['DelChalan']['id'], array('controller' => 'del_chalans', 'action' => 'view', $delChalanDet['DelChalan']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($delChalanDet['ItemCode']['id'], array('controller' => 'item_codes', 'action' => 'view', $delChalanDet['ItemCode']['id'])); ?>
		</td>
		<td><?php echo h($delChalanDet['DelChalanDet']['qty']); ?>&nbsp;</td>
		<td><?php echo h($delChalanDet['DelChalanDet']['price']); ?>&nbsp;</td>
		<td><?php echo h($delChalanDet['DelChalanDet']['tot_price']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($delChalanDet['TaxComb']['id'], array('controller' => 'tax_combs', 'action' => 'view', $delChalanDet['TaxComb']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $delChalanDet['DelChalanDet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $delChalanDet['DelChalanDet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $delChalanDet['DelChalanDet']['id']), null, __('Are you sure you want to delete # %s?', $delChalanDet['DelChalanDet']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Del Chalan Det'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Del Chalans'), array('controller' => 'del_chalans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Del Chalan'), array('controller' => 'del_chalans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Combs'), array('controller' => 'tax_combs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Comb'), array('controller' => 'tax_combs', 'action' => 'add')); ?> </li>
	</ul>
</div>
