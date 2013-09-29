<div class="paymentDets view">
<h2><?php  echo __('Payment Det'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paymentDet['PaymentDet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($paymentDet['Payment']['id'], array('controller' => 'payments', 'action' => 'view', $paymentDet['Payment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account To'); ?></dt>
		<dd>
			<?php echo h($paymentDet['PaymentDet']['account_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($paymentDet['PaymentDet']['amount']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Payment Det'), array('action' => 'edit', $paymentDet['PaymentDet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Payment Det'), array('action' => 'delete', $paymentDet['PaymentDet']['id']), null, __('Are you sure you want to delete # %s?', $paymentDet['PaymentDet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Dets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Det'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
