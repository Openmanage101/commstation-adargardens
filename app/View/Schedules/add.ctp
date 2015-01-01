<div class="schedules form">
<?php echo $this->Form->create('Schedule'); ?>
	<fieldset>
		<legend><?php echo __('Add Schedule'); ?></legend>
	<?php
		echo $this->Form->input('schedule_message_id');
		echo $this->Form->input('interval_months');
		//echo $this->Form->input('last_distribution');
		echo $this->Form->input('next_distribution');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?></li>
	</ul>
</div>
