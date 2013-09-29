<div class="contraDets form">
<?php echo $this->Form->create('ContraDet'); ?>
	<fieldset>
		<legend><?php echo __('Add Contra Det'); ?></legend>
	<?php
		echo $this->Form->input('contra_id');
		echo $this->Form->input('account_to');
		echo $this->Form->input('amount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contra Dets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contras'), array('controller' => 'contras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contra'), array('controller' => 'contras', 'action' => 'add')); ?> </li>
	</ul>
</div>
