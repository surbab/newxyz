<div class="assetDeprCats view">
<h2><?php  echo __('Asset Depr Cat'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($assetDeprCat['AssetDeprCat']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Depr'); ?></dt>
		<dd>
			<?php echo h($assetDeprCat['AssetDeprCat']['asset_depr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Desc'); ?></dt>
		<dd>
			<?php echo h($assetDeprCat['AssetDeprCat']['asset_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Depreciation'); ?></dt>
		<dd>
			<?php echo h($assetDeprCat['AssetDeprCat']['asset_depreciation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($assetDeprCat['AssetDeprCat']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($assetDeprCat['AssetDeprCat']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($assetDeprCat['AssetDeprCat']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($assetDeprCat['AssetDeprCat']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Asset Depr Cat'), array('action' => 'edit', $assetDeprCat['AssetDeprCat']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Asset Depr Cat'), array('action' => 'delete', $assetDeprCat['AssetDeprCat']['id']), null, __('Are you sure you want to delete # %s?', $assetDeprCat['AssetDeprCat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Depr Cats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Depr Cat'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Deprs'), array('controller' => 'asset_deprs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Depr'), array('controller' => 'asset_deprs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Asset Deprs'); ?></h3>
	<?php if (!empty($assetDeprCat['AssetDepr'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Asset Depreciation'); ?></th>
		<th><?php echo __('Asset Desc'); ?></th>
		<th><?php echo __('Asset Depr Cat Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($assetDeprCat['AssetDepr'] as $assetDepr): ?>
		<tr>
			<td><?php echo $assetDepr['id']; ?></td>
			<td><?php echo $assetDepr['asset_depreciation']; ?></td>
			<td><?php echo $assetDepr['asset_desc']; ?></td>
			<td><?php echo $assetDepr['asset_depr_cat_id']; ?></td>
			<td><?php echo $assetDepr['creat_on']; ?></td>
			<td><?php echo $assetDepr['creat_by']; ?></td>
			<td><?php echo $assetDepr['mod_on']; ?></td>
			<td><?php echo $assetDepr['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'asset_deprs', 'action' => 'view', $assetDepr['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'asset_deprs', 'action' => 'edit', $assetDepr['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'asset_deprs', 'action' => 'delete', $assetDepr['id']), null, __('Are you sure you want to delete # %s?', $assetDepr['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Asset Depr'), array('controller' => 'asset_deprs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
