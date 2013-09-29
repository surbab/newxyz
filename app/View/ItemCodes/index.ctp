<div class="itemCodes index">
	<h2><?php echo __('Item Codes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_code'); ?></th>
			<th><?php echo $this->Paginator->sort('item_class_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('item_stock'); ?></th>
			<th><?php echo $this->Paginator->sort('item_price'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($itemCodes as $itemCode): ?>
	<tr>
		<td><?php echo h($itemCode['ItemCode']['id']); ?>&nbsp;</td>
		<td><?php echo h($itemCode['ItemCode']['item_code']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($itemCode['ItemClass']['id'], array('controller' => 'item_classes', 'action' => 'view', $itemCode['ItemClass']['id'])); ?>
		</td>
		<td><?php echo h($itemCode['ItemCode']['item_desc']); ?>&nbsp;</td>
		<td><?php echo h($itemCode['ItemCode']['item_stock']); ?>&nbsp;</td>
		<td><?php echo h($itemCode['ItemCode']['item_price']); ?>&nbsp;</td>
		<td><?php echo h($itemCode['ItemCode']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($itemCode['ItemCode']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($itemCode['ItemCode']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($itemCode['ItemCode']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $itemCode['ItemCode']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $itemCode['ItemCode']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itemCode['ItemCode']['id']), null, __('Are you sure you want to delete # %s?', $itemCode['ItemCode']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Item Code'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Item Classes'), array('controller' => 'item_classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Class'), array('controller' => 'item_classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eng Bom Dets'), array('controller' => 'eng_bom_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eng Bom Det'), array('controller' => 'eng_bom_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eng Boms'), array('controller' => 'eng_boms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eng Bom'), array('controller' => 'eng_boms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mat Accs'), array('controller' => 'mat_accs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mat Acc'), array('controller' => 'mat_accs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mat Issue Dets'), array('controller' => 'mat_issue_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mat Issue Det'), array('controller' => 'mat_issue_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
