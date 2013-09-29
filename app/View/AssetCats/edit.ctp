<div class="assetCats form">
<?php echo $this->Form->create('AssetCat'); ?>
	<fieldset>
		<legend><?php echo __('Edit Asset Cat'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('asset_cat');
		echo $this->Form->input('asset_desc');
		echo $this->Form->input('creat_on');
		echo $this->Form->input('creat_by');
		echo $this->Form->input('mod_on');
		echo $this->Form->input('mod_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AssetCat.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AssetCat.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Asset Cats'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Asset Codes'), array('controller' => 'asset_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Code'), array('controller' => 'asset_codes', 'action' => 'add')); ?> </li>
	</ul>
</div>
