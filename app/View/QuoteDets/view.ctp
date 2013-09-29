<div class="quoteDets view">
<h2><?php  echo __('Quote Det'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($quoteDet['QuoteDet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quotation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($quoteDet['Quotation']['id'], array('controller' => 'quotations', 'action' => 'view', $quoteDet['Quotation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Code'); ?></dt>
		<dd>
			<?php echo $this->Html->link($quoteDet['ItemCode']['id'], array('controller' => 'item_codes', 'action' => 'view', $quoteDet['ItemCode']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uom'); ?></dt>
		<dd>
			<?php echo $this->Html->link($quoteDet['Uom']['id'], array('controller' => 'uoms', 'action' => 'view', $quoteDet['Uom']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($quoteDet['QuoteDet']['qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($quoteDet['QuoteDet']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tot Price'); ?></dt>
		<dd>
			<?php echo h($quoteDet['QuoteDet']['tot_price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Quote Det'), array('action' => 'edit', $quoteDet['QuoteDet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Quote Det'), array('action' => 'delete', $quoteDet['QuoteDet']['id']), null, __('Are you sure you want to delete # %s?', $quoteDet['QuoteDet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Quote Dets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quote Det'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotations'), array('controller' => 'quotations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quotation'), array('controller' => 'quotations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uoms'), array('controller' => 'uoms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uom'), array('controller' => 'uoms', 'action' => 'add')); ?> </li>
	</ul>
</div>
