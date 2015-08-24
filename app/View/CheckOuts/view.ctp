<div class="checkOuts view">
<h2><?php echo __('Check Out'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($checkOut['CheckOut']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($checkOut['User']['email'], array('controller' => 'users', 'action' => 'view', $checkOut['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($checkOut['Item']['name'], array('controller' => 'items', 'action' => 'view', $checkOut['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Check Out Date'); ?></dt>
		<dd>
			<?php echo h($checkOut['CheckOut']['check_out_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Return Date'); ?></dt>
		<dd>
			<?php echo h($checkOut['CheckOut']['return_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Check Out'), array('action' => 'edit', $checkOut['CheckOut']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Check Out'), array('action' => 'delete', $checkOut['CheckOut']['id']), array(), __('Are you sure you want to delete # %s?', $checkOut['CheckOut']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Check Outs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Check Out'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
