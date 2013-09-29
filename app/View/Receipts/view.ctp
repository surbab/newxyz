<div class="Receipts view">
<h2><?php  echo __('Receipt'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($receipt['Receipt']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($receipt['Location']['name'], array('controller' => 'locations', 'action' => 'view', $receipt['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Receipt No'); ?></dt>
		<dd>
			<?php echo h($receipt['Receipt']['receipt_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Receipt Date'); ?></dt>
		<dd>
			<?php echo h($receipt['Receipt']['receipt_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Id'); ?></dt>
		<dd>
			<?php echo h($receipt['Receipt']['account_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc'); ?></dt>
		<dd>
			<?php echo h($receipt['Receipt']['desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tot Value'); ?></dt>
		<dd>
			<?php echo h($receipt['Receipt']['tot_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($receipt['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $receipt['FinYear']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($receipt['Receipt']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($receipt['Receipt']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($receipt['Receipt']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($receipt['Receipt']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Receipt'), array('action' => 'edit', $receipt['Receipt']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Receipt'), array('action' => 'delete', $receipt['Receipt']['id']), null, __('Are you sure you want to delete # %s?', $receipt['Receipt']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Receipts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receipt'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Receipt Dets'), array('controller' => 'Receipt_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receipt Det'), array('controller' => 'Receipt_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Receipt Dets'); ?></h3>
	<?php if (!empty($receipt['ReceiptDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Receipt Id'); ?></th>
		<th><?php echo __('Account To'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($receipt['ReceiptDet'] as $receiptDet): ?>
		<tr>
			<td><?php echo $receiptDet['id']; ?></td>
			<td><?php echo $receiptDet['receipt_id']; ?></td>
			<td><?php echo $receiptDet['account_from']; ?></td>
			<td><?php echo $receiptDet['amount']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'receipt_dets', 'action' => 'view', $receiptDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'receipt_dets', 'action' => 'edit', $receiptDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'receipt_dets', 'action' => 'delete', $receiptDet['id']), null, __('Are you sure you want to delete # %s?', $receiptDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Receipt Det'), array('controller' => 'receipt_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
