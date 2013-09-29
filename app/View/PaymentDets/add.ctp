<div class="paymentDets form">
<?php echo $this->Form->create('PaymentDet'); ?>
	<fieldset>
		<legend><?php echo __('Add Payment Det'); ?></legend>
	<?php
		echo $this->Form->input('payment_id');
		echo $this->Form->input('account_to');
		echo $this->Form->input('amount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Payment Dets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
