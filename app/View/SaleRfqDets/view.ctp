<div class="saleRfqDets view">
<h2><?php  echo __('Sale Rfq Det'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($saleRfqDet['SaleRfqDet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sale Rfq'); ?></dt>
		<dd>
			<?php echo $this->Html->link($saleRfqDet['SaleRfq']['id'], array('controller' => 'sale_rfqs', 'action' => 'view', $saleRfqDet['SaleRfq']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Name'); ?></dt>
		<dd>
			<?php echo h($saleRfqDet['SaleRfqDet']['item_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Desc'); ?></dt>
		<dd>
			<?php echo h($saleRfqDet['SaleRfqDet']['item_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rfq Qty'); ?></dt>
		<dd>
			<?php echo h($saleRfqDet['SaleRfqDet']['rfq_qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rfq Comments'); ?></dt>
		<dd>
			<?php echo h($saleRfqDet['SaleRfqDet']['rfq_comments']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estimation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($saleRfqDet['Estimation']['id'], array('controller' => 'estimations', 'action' => 'view', $saleRfqDet['Estimation']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sale Rfq Det'), array('action' => 'edit', $saleRfqDet['SaleRfqDet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sale Rfq Det'), array('action' => 'delete', $saleRfqDet['SaleRfqDet']['id']), null, __('Are you sure you want to delete # %s?', $saleRfqDet['SaleRfqDet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Rfq Dets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Rfq Det'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Rfqs'), array('controller' => 'sale_rfqs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Rfq'), array('controller' => 'sale_rfqs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimations'), array('controller' => 'estimations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimation'), array('controller' => 'estimations', 'action' => 'add')); ?> </li>
	</ul>
</div>
