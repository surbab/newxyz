<div class="contras view">
<h2><?php  echo __('Contra'); ?></h2>
<?php

//pr($contra);

//die();
?>

	<dl>
		<dt><?php echo __('Contra No'); ?></dt>
		<dd>
			<?php echo h($contra['Contra']['contra_no']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo  h($contra['Location']['name']); ?> 
			&nbsp;
		</dd>
				<dt><?php echo __('Contra Date'); ?></dt>
		<dd>
			<?php echo h($contra['Contra']['contra_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Id'); ?></dt>
		<dd>
			<?php echo h($contra['Ledger']['ledger_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contra Details'); ?></dt>
		<table>
		<?php
		$i = 0;
		foreach ($contra['ContraDet'] as $contraDet): ?>
		<tr>
			<td><?php echo $contraDet['id']; ?></td>
			<td><?php echo $contraDet['contra_id']; ?></td>
			<td><?php echo $contra['Ledger']['ledger_name']; ?></td>
			<td><?php echo $contraDet['amount']; ?></td>
		
		</tr>

	<?php endforeach; ?>
		
		</table>		
		<dt><?php echo __('Desc'); ?></dt>
		<dd>
			<?php echo h($contra['Contra']['desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tot Value'); ?></dt>
		<dd>
			<?php echo h($contra['Contra']['tot_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contra['FinYear']['fin_year'], array('controller' => 'fin_years', 'action' => 'view', $contra['FinYear']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($contra['Contra']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($contra['User']['user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($contra['Contra']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($contra['User']['user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contra'), array('action' => 'edit', $contra['Contra']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contra'), array('action' => 'delete', $contra['Contra']['id']), null, __('Are you sure you want to delete # %s?', $contra['Contra']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contra'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contra Dets'), array('controller' => 'contra_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contra Det'), array('controller' => 'contra_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contra Det'), array('controller' => 'contra_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
