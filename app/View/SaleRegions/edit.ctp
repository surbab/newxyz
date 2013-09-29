<div class="saleRegions form">
<?php echo $this->Form->create('SaleRegion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sale Region'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sale_region');
		echo $this->Form->input('desc');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SaleRegion.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SaleRegion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sale Regions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sale Agents'), array('controller' => 'sale_agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Agent'), array('controller' => 'sale_agents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Engs'), array('controller' => 'sale_engs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Eng'), array('controller' => 'sale_engs', 'action' => 'add')); ?> </li>
	</ul>
</div>
