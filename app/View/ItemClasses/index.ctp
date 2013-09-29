<div class="itemClasses index">
	<h2><?php echo __('Item Classes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_class'); ?></th>
			<th><?php echo $this->Paginator->sort('item_cat_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_class_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($itemClasses as $itemClass): ?>
	<tr>
		<td><?php echo h($itemClass['ItemClass']['id']); ?>&nbsp;</td>
		<td><?php echo h($itemClass['ItemClass']['item_class']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($itemClass['ItemCat']['id'], array('controller' => 'item_cats', 'action' => 'view', $itemClass['ItemCat']['id'])); ?>
		</td>
		<td><?php echo h($itemClass['ItemClass']['item_class_desc']); ?>&nbsp;</td>
		<td><?php echo h($itemClass['ItemClass']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($itemClass['ItemClass']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($itemClass['ItemClass']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($itemClass['ItemClass']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $itemClass['ItemClass']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $itemClass['ItemClass']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itemClass['ItemClass']['id']), null, __('Are you sure you want to delete # %s?', $itemClass['ItemClass']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Item Class'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Item Cats'), array('controller' => 'item_cats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Cat'), array('controller' => 'item_cats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
	</ul>
</div>
