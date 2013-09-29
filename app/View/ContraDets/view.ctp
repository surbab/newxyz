<div class="contraDets view">
<h2><?php  echo __('Contra Det'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contraDet['ContraDet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contra'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contraDet['Contra']['id'], array('controller' => 'contras', 'action' => 'view', $contraDet['Contra']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account To'); ?></dt>
		<dd>
			<?php echo h($contraDet['ContraDet']['account_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($contraDet['ContraDet']['amount']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contra Det'), array('action' => 'edit', $contraDet['ContraDet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contra Det'), array('action' => 'delete', $contraDet['ContraDet']['id']), null, __('Are you sure you want to delete # %s?', $contraDet['ContraDet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contra Dets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contra Det'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contras'), array('controller' => 'contras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contra'), array('controller' => 'contras', 'action' => 'add')); ?> </li>
	</ul>
</div>
