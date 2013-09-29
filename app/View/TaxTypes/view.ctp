<div class="taxTypes view">
<h2><?php  echo __('Tax Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($taxType['TaxType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Type'); ?></dt>
		<dd>
			<?php echo h($taxType['TaxType']['tax_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Perc'); ?></dt>
		<dd>
			<?php echo h($taxType['TaxType']['tax_perc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Active'); ?></dt>
		<dd>
			<?php echo h($taxType['TaxType']['tax_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Tax On'); ?></dt>
		<dd>
			<?php echo h($taxType['TaxType']['is_tax_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax On'); ?></dt>
		<dd>
			<?php echo h($taxType['TaxType']['tax_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Fr'); ?></dt>
		<dd>
			<?php echo h($taxType['TaxType']['effective_fr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective To'); ?></dt>
		<dd>
			<?php echo h($taxType['TaxType']['effective_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($taxType['TaxType']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($taxType['TaxType']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($taxType['TaxType']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($taxType['TaxType']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tax Type'), array('action' => 'edit', $taxType['TaxType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tax Type'), array('action' => 'delete', $taxType['TaxType']['id']), null, __('Are you sure you want to delete # %s?', $taxType['TaxType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Comb Dets'), array('controller' => 'tax_comb_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Comb Det'), array('controller' => 'tax_comb_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tax Comb Dets'); ?></h3>
	<?php if (!empty($taxType['TaxCombDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tax Comb Id'); ?></th>
		<th><?php echo __('Tax Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($taxType['TaxCombDet'] as $taxCombDet): ?>
		<tr>
			<td><?php echo $taxCombDet['id']; ?></td>
			<td><?php echo $taxCombDet['tax_comb_id']; ?></td>
			<td><?php echo $taxCombDet['tax_type_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tax_comb_dets', 'action' => 'view', $taxCombDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tax_comb_dets', 'action' => 'edit', $taxCombDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tax_comb_dets', 'action' => 'delete', $taxCombDet['id']), null, __('Are you sure you want to delete # %s?', $taxCombDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tax Comb Det'), array('controller' => 'tax_comb_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
