<div class="statusses view">
<h2><?php  echo __('Statuss'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($statuss['Statuss']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($statuss['Statuss']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Statuss'), array('action' => 'edit', $statuss['Statuss']['ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Statuss'), array('action' => 'delete', $statuss['Statuss']['ID']), null, __('Are you sure you want to delete # %s?', $statuss['Statuss']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Statusses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Statuss'), array('action' => 'add')); ?> </li>
	</ul>
</div>
