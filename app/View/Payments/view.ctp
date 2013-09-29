<div class="payments view">
<h2><?php  echo __('Payment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($payment['Location']['name'], array('controller' => 'locations', 'action' => 'view', $payment['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment No'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['payment_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Date'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['payment_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Id'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['account_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tot Value'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['tot_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($payment['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $payment['FinYear']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Payment'), array('action' => 'edit', $payment['Payment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Payment'), array('action' => 'delete', $payment['Payment']['id']), null, __('Are you sure you want to delete # %s?', $payment['Payment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Dets'), array('controller' => 'payment_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Det'), array('controller' => 'payment_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Payment Dets'); ?></h3>
	<?php if (!empty($payment['PaymentDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Payment Id'); ?></th>
		<th><?php echo __('Account To'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($payment['PaymentDet'] as $paymentDet): ?>
		<tr>
			<td><?php echo $paymentDet['id']; ?></td>
			<td><?php echo $paymentDet['payment_id']; ?></td>
			<td><?php echo $paymentDet['account_to']; ?></td>
			<td><?php echo $paymentDet['amount']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'payment_dets', 'action' => 'view', $paymentDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'payment_dets', 'action' => 'edit', $paymentDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'payment_dets', 'action' => 'delete', $paymentDet['id']), null, __('Are you sure you want to delete # %s?', $paymentDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Payment Det'), array('controller' => 'payment_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
