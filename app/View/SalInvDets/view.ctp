<div class="salInvDets view">
<h2><?php  echo __('Sal Inv Det'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($salInvDet['SalInvDet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sale Inv'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salInvDet['SaleInv']['id'], array('controller' => 'sale_invs', 'action' => 'view', $salInvDet['SaleInv']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Code'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salInvDet['ItemCode']['id'], array('controller' => 'item_codes', 'action' => 'view', $salInvDet['ItemCode']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($salInvDet['SalInvDet']['qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($salInvDet['SalInvDet']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tot Price'); ?></dt>
		<dd>
			<?php echo h($salInvDet['SalInvDet']['tot_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Comb'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salInvDet['TaxComb']['id'], array('controller' => 'tax_combs', 'action' => 'view', $salInvDet['TaxComb']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Amt'); ?></dt>
		<dd>
			<?php echo h($salInvDet['SalInvDet']['tax_amt']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sal Inv Det'), array('action' => 'edit', $salInvDet['SalInvDet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sal Inv Det'), array('action' => 'delete', $salInvDet['SalInvDet']['id']), null, __('Are you sure you want to delete # %s?', $salInvDet['SalInvDet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sal Inv Dets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sal Inv Det'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Invs'), array('controller' => 'sale_invs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Inv'), array('controller' => 'sale_invs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Combs'), array('controller' => 'tax_combs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Comb'), array('controller' => 'tax_combs', 'action' => 'add')); ?> </li>
	</ul>
</div>
