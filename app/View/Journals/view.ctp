<div class="journals view">
<h2><?php  echo __('Journal'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($journal['Journal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($journal['Location']['name'], array('controller' => 'locations', 'action' => 'view', $journal['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Journal No'); ?></dt>
		<dd>
			<?php echo h($journal['Journal']['journal_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Journal Date'); ?></dt>
		<dd>
			<?php echo h($journal['Journal']['journal_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Journal Details'); ?></dt>
		
		<div class='wrapper'>
		<table>
		<?php
			$i = 0;
		foreach ($journal['JournalDet'] as $journalDet): ?>
		<tr>
			<td><?php echo $journalDet['id']; ?></td>
			<td><?php echo $journalDet['journal_id']; ?></td>
			<td><?php echo $journalDet['account_by_id']; ?></td>
			<td><?php echo $journalDet['account_to_id']; ?></td>
			<td><?php echo $journalDet['amount']; ?></td>
			
		</tr>
		
	<?php endforeach; ?>
		</table>
		</div>
		<dt><?php echo __('Desc'); ?></dt>
		<dd>
			<?php echo h($journal['Journal']['desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tot Value'); ?></dt>
		<dd>
			<?php echo h($journal['Journal']['tot_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($journal['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $journal['FinYear']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($journal['Journal']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($journal['Journal']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($journal['Journal']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($journal['Journal']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Journal'), array('action' => 'edit', $journal['Journal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Journal'), array('action' => 'delete', $journal['Journal']['id']), null, __('Are you sure you want to delete # %s?', $journal['Journal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Journals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journal'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Journal Dets'), array('controller' => 'journal_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journal Det'), array('controller' => 'journal_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>


	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Journal Det'), array('controller' => 'journal_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
