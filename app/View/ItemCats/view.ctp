<div class="itemCats view">
<h2><?php  echo __('Item Cat'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itemCat['ItemCat']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Cat'); ?></dt>
		<dd>
			<?php echo h($itemCat['ItemCat']['item_cat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Desc'); ?></dt>
		<dd>
			<?php echo h($itemCat['ItemCat']['item_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($itemCat['ItemCat']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($itemCat['ItemCat']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($itemCat['ItemCat']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($itemCat['ItemCat']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item Cat'), array('action' => 'edit', $itemCat['ItemCat']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item Cat'), array('action' => 'delete', $itemCat['ItemCat']['id']), null, __('Are you sure you want to delete # %s?', $itemCat['ItemCat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Cats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Cat'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Classes'), array('controller' => 'item_classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Class'), array('controller' => 'item_classes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Item Classes'); ?></h3>
	<?php if (!empty($itemCat['ItemClass'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Class'); ?></th>
		<th><?php echo __('Item Cat Id'); ?></th>
		<th><?php echo __('Item Class Desc'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($itemCat['ItemClass'] as $itemClass): ?>
		<tr>
			<td><?php echo $itemClass['id']; ?></td>
			<td><?php echo $itemClass['item_class']; ?></td>
			<td><?php echo $itemClass['item_cat_id']; ?></td>
			<td><?php echo $itemClass['item_class_desc']; ?></td>
			<td><?php echo $itemClass['creat_on']; ?></td>
			<td><?php echo $itemClass['creat_by']; ?></td>
			<td><?php echo $itemClass['mod_on']; ?></td>
			<td><?php echo $itemClass['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'item_classes', 'action' => 'view', $itemClass['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'item_classes', 'action' => 'edit', $itemClass['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'item_classes', 'action' => 'delete', $itemClass['id']), null, __('Are you sure you want to delete # %s?', $itemClass['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Item Class'), array('controller' => 'item_classes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
