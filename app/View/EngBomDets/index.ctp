<div class="engBomDets index">
	<h2><?php echo __('Eng Bom Dets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('eng_bom_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_code_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bom_qty'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($engBomDets as $engBomDet): ?>
	<tr>
		<td><?php echo h($engBomDet['EngBomDet']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($engBomDet['EngBom']['id'], array('controller' => 'eng_boms', 'action' => 'view', $engBomDet['EngBom']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($engBomDet['ItemCode']['id'], array('controller' => 'item_codes', 'action' => 'view', $engBomDet['ItemCode']['id'])); ?>
		</td>
		<td><?php echo h($engBomDet['EngBomDet']['bom_qty']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $engBomDet['EngBomDet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $engBomDet['EngBomDet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $engBomDet['EngBomDet']['id']), null, __('Are you sure you want to delete # %s?', $engBomDet['EngBomDet']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Eng Bom Det'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Eng Boms'), array('controller' => 'eng_boms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eng Bom'), array('controller' => 'eng_boms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
	</ul>
</div>
