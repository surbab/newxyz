<div class="grnDets view">
<h2><?php  echo __('Grn Det'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($grnDet['GrnDet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grn'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grnDet['Grn']['id'], array('controller' => 'grns', 'action' => 'view', $grnDet['Grn']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Po Det'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grnDet['PoDet']['id'], array('controller' => 'po_dets', 'action' => 'view', $grnDet['PoDet']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($grnDet['GrnDet']['qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($grnDet['GrnDet']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tot Price'); ?></dt>
		<dd>
			<?php echo h($grnDet['GrnDet']['tot_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Comb'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grnDet['TaxComb']['id'], array('controller' => 'tax_combs', 'action' => 'view', $grnDet['TaxComb']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval'); ?></dt>
		<dd>
			<?php echo h($grnDet['GrnDet']['approval']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval Register'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grnDet['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $grnDet['ApprovalRegister']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grn Det'), array('action' => 'edit', $grnDet['GrnDet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grn Det'), array('action' => 'delete', $grnDet['GrnDet']['id']), null, __('Are you sure you want to delete # %s?', $grnDet['GrnDet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grn Dets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grn Det'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grns'), array('controller' => 'grns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grn'), array('controller' => 'grns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Po Dets'), array('controller' => 'po_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Po Det'), array('controller' => 'po_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Combs'), array('controller' => 'tax_combs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Comb'), array('controller' => 'tax_combs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
	</ul>
</div>
