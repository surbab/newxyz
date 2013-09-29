<div class="engBomDets view">
<h2><?php  echo __('Eng Bom Det'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($engBomDet['EngBomDet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eng Bom'); ?></dt>
		<dd>
			<?php echo $this->Html->link($engBomDet['EngBom']['id'], array('controller' => 'eng_boms', 'action' => 'view', $engBomDet['EngBom']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Code'); ?></dt>
		<dd>
			<?php echo $this->Html->link($engBomDet['ItemCode']['id'], array('controller' => 'item_codes', 'action' => 'view', $engBomDet['ItemCode']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bom Qty'); ?></dt>
		<dd>
			<?php echo h($engBomDet['EngBomDet']['bom_qty']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Eng Bom Det'), array('action' => 'edit', $engBomDet['EngBomDet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Eng Bom Det'), array('action' => 'delete', $engBomDet['EngBomDet']['id']), null, __('Are you sure you want to delete # %s?', $engBomDet['EngBomDet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Eng Bom Dets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eng Bom Det'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eng Boms'), array('controller' => 'eng_boms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eng Bom'), array('controller' => 'eng_boms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
	</ul>
</div>
