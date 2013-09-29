<div class="resourceWcs index">
	<h2><?php echo __('Resource Wcs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('res_nick'); ?></th>
			<th><?php echo $this->Paginator->sort('dept_id'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_code_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($resourceWcs as $resourceWc): ?>
	<tr>
		<td><?php echo h($resourceWc['ResourceWc']['id']); ?>&nbsp;</td>
		<td><?php echo h($resourceWc['ResourceWc']['res_nick']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($resourceWc['Dept']['name'], array('controller' => 'depts', 'action' => 'view', $resourceWc['Dept']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($resourceWc['AssetCode']['id'], array('controller' => 'asset_codes', 'action' => 'view', $resourceWc['AssetCode']['id'])); ?>
		</td>
		<td><?php echo h($resourceWc['ResourceWc']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($resourceWc['ResourceWc']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($resourceWc['ResourceWc']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($resourceWc['ResourceWc']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $resourceWc['ResourceWc']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $resourceWc['ResourceWc']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $resourceWc['ResourceWc']['id']), null, __('Are you sure you want to delete # %s?', $resourceWc['ResourceWc']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Resource Wc'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Depts'), array('controller' => 'depts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dept'), array('controller' => 'depts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Codes'), array('controller' => 'asset_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Code'), array('controller' => 'asset_codes', 'action' => 'add')); ?> </li>
	</ul>
</div>
