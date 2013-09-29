<div class="mouldRewReasons form">
<?php echo $this->Form->create('MouldRewReason'); ?>
	<fieldset>
		<legend><?php echo __('Add Mould Rew Reason'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('rew_desc');
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

		<li><?php echo $this->Html->link(__('List Mould Rew Reasons'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mould Rework Histories'), array('controller' => 'mould_rework_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Rework History'), array('controller' => 'mould_rework_histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
