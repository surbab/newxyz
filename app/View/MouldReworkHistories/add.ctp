<div class="mouldReworkHistories form">
<?php echo $this->Form->create('MouldReworkHistory'); ?>
	<fieldset>
		<legend><?php echo __('Add Mould Rework History'); ?></legend>
	<?php
		echo $this->Form->input('location_id');
		echo $this->Form->input('mould_det_id');
		echo $this->Form->input('damage_date');
		echo $this->Form->input('mould_rew_reason_id');
		echo $this->Form->input('mould_rew_reason_desc');
		echo $this->Form->input('mould_disposition');
		echo $this->Form->input('dispatch_date');
		echo $this->Form->input('del_chalan_id');
		echo $this->Form->input('partner_id');
		echo $this->Form->input('received_date');
		echo $this->Form->input('rewo_cost');
		echo $this->Form->input('comment_rew');
		echo $this->Form->input('pur_inv_entry_id');
		echo $this->Form->input('creat_on');
		echo $this->Form->input('creat_by');
		echo $this->Form->input('mod_on');
		echo $this->Form->input('mod_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mould Rework Histories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Dets'), array('controller' => 'mould_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Det'), array('controller' => 'mould_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Rew Reasons'), array('controller' => 'mould_rew_reasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Rew Reason'), array('controller' => 'mould_rew_reasons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Del Chalans'), array('controller' => 'del_chalans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Del Chalan'), array('controller' => 'del_chalans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pur Inv Entries'), array('controller' => 'pur_inv_entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pur Inv Entry'), array('controller' => 'pur_inv_entries', 'action' => 'add')); ?> </li>
	</ul>
</div>
