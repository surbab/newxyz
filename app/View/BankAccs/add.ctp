<div class="bankAccs form">
<?php echo $this->Form->create('BankAcc'); ?>
	<fieldset>
		<legend><?php echo __('Add Bank Acc'); ?></legend>
	<?php
		echo $this->Form->input('location_id');
		echo $this->Form->input('vouch_type');
		echo $this->Form->input('ref_id');
		echo $this->Form->input('trans_date');
		echo $this->Form->input('credit');
		echo $this->Form->input('debit');
		echo $this->Form->input('fin_year_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bank Accs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
	</ul>
</div>
