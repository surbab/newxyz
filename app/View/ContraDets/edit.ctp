<div class="contraDets form">
<?php echo $this->Form->create('ContraDet'); ?>
	<fieldset>
		<legend><?php echo __('Edit Contra Det'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ContraDet.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ContraDet.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contra Dets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contras'), array('controller' => 'contras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contra'), array('controller' => 'contras', 'action' => 'add')); ?> </li>
	</ul>
</div>
