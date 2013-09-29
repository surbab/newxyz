<div class="assetCodes view">
<h2><?php  echo __('Asset Code'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($assetCode['AssetCode']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assetCode['Location']['name'], array('controller' => 'locations', 'action' => 'view', $assetCode['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Code'); ?></dt>
		<dd>
			<?php echo h($assetCode['AssetCode']['asset_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Cat'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assetCode['AssetCat']['id'], array('controller' => 'asset_cats', 'action' => 'view', $assetCode['AssetCat']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Depr'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assetCode['AssetDepr']['id'], array('controller' => 'asset_deprs', 'action' => 'view', $assetCode['AssetDepr']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Life'); ?></dt>
		<dd>
			<?php echo h($assetCode['AssetCode']['asset_life']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Desc'); ?></dt>
		<dd>
			<?php echo h($assetCode['AssetCode']['asset_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assetCode['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $assetCode['Partner']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Po Id'); ?></dt>
		<dd>
			<?php echo h($assetCode['AssetCode']['asset_po_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grn'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assetCode['Grn']['id'], array('controller' => 'grns', 'action' => 'view', $assetCode['Grn']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exp Life'); ?></dt>
		<dd>
			<?php echo h($assetCode['AssetCode']['exp_life']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assetCode['AssetLocation']['id'], array('controller' => 'asset_locations', 'action' => 'view', $assetCode['AssetLocation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($assetCode['AssetCode']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($assetCode['AssetCode']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($assetCode['AssetCode']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($assetCode['AssetCode']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Asset Code'), array('action' => 'edit', $assetCode['AssetCode']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Asset Code'), array('action' => 'delete', $assetCode['AssetCode']['id']), null, __('Are you sure you want to delete # %s?', $assetCode['AssetCode']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Codes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Code'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Cats'), array('controller' => 'asset_cats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Cat'), array('controller' => 'asset_cats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Deprs'), array('controller' => 'asset_deprs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Depr'), array('controller' => 'asset_deprs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grns'), array('controller' => 'grns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grn'), array('controller' => 'grns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Locations'), array('controller' => 'asset_locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Location'), array('controller' => 'asset_locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Dets'), array('controller' => 'mould_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Det'), array('controller' => 'mould_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Mould Dets'); ?></h3>
	<?php if (!empty($assetCode['MouldDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Asset Code Id'); ?></th>
		<th><?php echo __('Mould Life Est'); ?></th>
		<th><?php echo __('No Cav'); ?></th>
		<th><?php echo __('Dwg No'); ?></th>
		<th><?php echo __('Co Own'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Supplier Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($assetCode['MouldDet'] as $mouldDet): ?>
		<tr>
			<td><?php echo $mouldDet['id']; ?></td>
			<td><?php echo $mouldDet['asset_code_id']; ?></td>
			<td><?php echo $mouldDet['mould_life_est']; ?></td>
			<td><?php echo $mouldDet['no_cav']; ?></td>
			<td><?php echo $mouldDet['dwg_no']; ?></td>
			<td><?php echo $mouldDet['co_own']; ?></td>
			<td><?php echo $mouldDet['customer_id']; ?></td>
			<td><?php echo $mouldDet['supplier_id']; ?></td>
			<td><?php echo $mouldDet['creat_on']; ?></td>
			<td><?php echo $mouldDet['creat_by']; ?></td>
			<td><?php echo $mouldDet['mod_on']; ?></td>
			<td><?php echo $mouldDet['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mould_dets', 'action' => 'view', $mouldDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mould_dets', 'action' => 'edit', $mouldDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mould_dets', 'action' => 'delete', $mouldDet['id']), null, __('Are you sure you want to delete # %s?', $mouldDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mould Det'), array('controller' => 'mould_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
