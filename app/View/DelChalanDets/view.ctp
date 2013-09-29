<div class="delChalanDets view">
<h2><?php  echo __('Del Chalan Det'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($delChalanDet['DelChalanDet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Chalan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($delChalanDet['DelChalan']['id'], array('controller' => 'del_chalans', 'action' => 'view', $delChalanDet['DelChalan']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Code'); ?></dt>
		<dd>
			<?php echo $this->Html->link($delChalanDet['ItemCode']['id'], array('controller' => 'item_codes', 'action' => 'view', $delChalanDet['ItemCode']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($delChalanDet['DelChalanDet']['qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($delChalanDet['DelChalanDet']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tot Price'); ?></dt>
		<dd>
			<?php echo h($delChalanDet['DelChalanDet']['tot_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Comb'); ?></dt>
		<dd>
			<?php echo $this->Html->link($delChalanDet['TaxComb']['id'], array('controller' => 'tax_combs', 'action' => 'view', $delChalanDet['TaxComb']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Del Chalan Det'), array('action' => 'edit', $delChalanDet['DelChalanDet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Del Chalan Det'), array('action' => 'delete', $delChalanDet['DelChalanDet']['id']), null, __('Are you sure you want to delete # %s?', $delChalanDet['DelChalanDet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Del Chalan Dets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Del Chalan Det'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Del Chalans'), array('controller' => 'del_chalans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Del Chalan'), array('controller' => 'del_chalans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Combs'), array('controller' => 'tax_combs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Comb'), array('controller' => 'tax_combs', 'action' => 'add')); ?> </li>
	</ul>
</div>
