<div class="matIssueDets view">
<h2><?php  echo __('Mat Issue Det'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($matIssueDet['MatIssueDet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mat Issue'); ?></dt>
		<dd>
			<?php echo $this->Html->link($matIssueDet['MatIssue']['id'], array('controller' => 'mat_issues', 'action' => 'view', $matIssueDet['MatIssue']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Code'); ?></dt>
		<dd>
			<?php echo $this->Html->link($matIssueDet['ItemCode']['id'], array('controller' => 'item_codes', 'action' => 'view', $matIssueDet['ItemCode']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($matIssueDet['MatIssueDet']['qty']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mat Issue Det'), array('action' => 'edit', $matIssueDet['MatIssueDet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mat Issue Det'), array('action' => 'delete', $matIssueDet['MatIssueDet']['id']), null, __('Are you sure you want to delete # %s?', $matIssueDet['MatIssueDet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mat Issue Dets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mat Issue Det'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mat Issues'), array('controller' => 'mat_issues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mat Issue'), array('controller' => 'mat_issues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
	</ul>
</div>
