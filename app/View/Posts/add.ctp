<div class="container">
	<!-- ヘッダー部分  ナビゲーションバー　-->
	<nav class="navbar navbar-custom navbar-fixed-top">
		<div class="row">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarAction">
					<span class="sr-only">Action navigation</span><!-- 音声ブラウザ用 -->
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbarAction">
				<ul class="nav navbar-nav">
					<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="posts form">
		<?php echo $this->Form->create('Post',array('type' => 'file')); ?>
		<fieldset>
			<legend><?php echo __('Add Post', array('type' => 'file')); ?></legend>
			<?php
			echo $this->Form->input('category_id',array('type'=>'select','options'=>$list));
			echo $this->Form->input('user_id');
			echo $this->Form->input('title');
			echo $this->Form->input('body');
			echo $this->Form->input('Image.0.filename',array('type' => 'file',));	
			echo $this->Form->input('Tag',array('type'=>'select','options'=>$tag,'multiple' => true,'size' => 5));
			?>
		</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>
