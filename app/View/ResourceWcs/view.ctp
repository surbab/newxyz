<div class="resourceWcs view">
<h2><?php  echo __('Resource Wc'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($resourceWc['ResourceWc']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Res Nick'); ?></dt>
		<dd>
			<?php echo h($resourceWc['ResourceWc']['res_nick']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dept'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resourceWc['Dept']['name'], array('controller' => 'depts', 'action' => 'view', $resourceWc['Dept']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Code'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resourceWc['AssetCode']['id'], array('controller' => 'asset_codes', 'action' => 'view', $resourceWc['AssetCode']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($resourceWc['ResourceWc']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($resourceWc['ResourceWc']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($resourceWc['ResourceWc']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($resourceWc['ResourceWc']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Resource Wc'), array('action' => 'edit', $resourceWc['ResourceWc']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Resource Wc'), array('action' => 'delete', $resourceWc['ResourceWc']['id']), null, __('Are you sure you want to delete # %s?', $resourceWc['ResourceWc']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Resource Wcs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resource Wc'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Depts'), array('controller' => 'depts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dept'), array('controller' => 'depts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Codes'), array('controller' => 'asset_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Code'), array('controller' => 'asset_codes', 'action' => 'add')); ?> </li>
	</ul>
</div>
