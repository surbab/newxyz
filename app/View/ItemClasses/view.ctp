<div class="itemClasses view">
<h2><?php  echo __('Item Class'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itemClass['ItemClass']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Class'); ?></dt>
		<dd>
			<?php echo h($itemClass['ItemClass']['item_class']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Cat'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemClass['ItemCat']['id'], array('controller' => 'item_cats', 'action' => 'view', $itemClass['ItemCat']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Class Desc'); ?></dt>
		<dd>
			<?php echo h($itemClass['ItemClass']['item_class_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($itemClass['ItemClass']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($itemClass['ItemClass']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($itemClass['ItemClass']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($itemClass['ItemClass']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item Class'), array('action' => 'edit', $itemClass['ItemClass']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item Class'), array('action' => 'delete', $itemClass['ItemClass']['id']), null, __('Are you sure you want to delete # %s?', $itemClass['ItemClass']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Classes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Class'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Cats'), array('controller' => 'item_cats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Cat'), array('controller' => 'item_cats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Item Codes'); ?></h3>
	<?php if (!empty($itemClass['ItemCode'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Code'); ?></th>
		<th><?php echo __('Item Class Id'); ?></th>
		<th><?php echo __('Item Desc'); ?></th>
		<th><?php echo __('Item Stock'); ?></th>
		<th><?php echo __('Item Price'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($itemClass['ItemCode'] as $itemCode): ?>
		<tr>
			<td><?php echo $itemCode['id']; ?></td>
			<td><?php echo $itemCode['item_code']; ?></td>
			<td><?php echo $itemCode['item_class_id']; ?></td>
			<td><?php echo $itemCode['item_desc']; ?></td>
			<td><?php echo $itemCode['item_stock']; ?></td>
			<td><?php echo $itemCode['item_price']; ?></td>
			<td><?php echo $itemCode['creat_on']; ?></td>
			<td><?php echo $itemCode['creat_by']; ?></td>
			<td><?php echo $itemCode['mod_on']; ?></td>
			<td><?php echo $itemCode['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'item_codes', 'action' => 'view', $itemCode['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'item_codes', 'action' => 'edit', $itemCode['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'item_codes', 'action' => 'delete', $itemCode['id']), null, __('Are you sure you want to delete # %s?', $itemCode['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
