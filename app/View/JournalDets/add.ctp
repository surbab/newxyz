<div class="journalDets form">
<?php echo $this->Form->create('JournalDet'); ?>
	<fieldset>
		<legend><?php echo __('Add Journal Det'); ?></legend>
	<?php
		echo $this->Form->input('journal_id');
		echo $this->Form->input('account_by_id');
		echo $this->Form->input('account_to_id');
		echo $this->Form->input('amount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Journal Dets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Journals'), array('controller' => 'journals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journal'), array('controller' => 'journals', 'action' => 'add')); ?> </li>
	</ul>
</div>
