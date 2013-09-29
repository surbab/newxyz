<div class="taxCombDets view">
<h2><?php  echo __('Tax Comb Det'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($taxCombDet['TaxCombDet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Comb'); ?></dt>
		<dd>
			<?php echo $this->Html->link($taxCombDet['TaxComb']['id'], array('controller' => 'tax_combs', 'action' => 'view', $taxCombDet['TaxComb']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($taxCombDet['TaxType']['id'], array('controller' => 'tax_types', 'action' => 'view', $taxCombDet['TaxType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tax Comb Det'), array('action' => 'edit', $taxCombDet['TaxCombDet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tax Comb Det'), array('action' => 'delete', $taxCombDet['TaxCombDet']['id']), null, __('Are you sure you want to delete # %s?', $taxCombDet['TaxCombDet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Comb Dets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Comb Det'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Combs'), array('controller' => 'tax_combs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Comb'), array('controller' => 'tax_combs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Types'), array('controller' => 'tax_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Type'), array('controller' => 'tax_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
