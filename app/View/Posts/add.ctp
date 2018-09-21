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
	<div class="row">
		<div class="posts form box">
			<?php echo $this->Form->create('Post',array('inputDefaults'=>array('div'=>'form-group','class'=>'form-control'),'type' => 'file', 'enctype' => 'multipart/form-data')); ?>
			<form>
				<legend><?php echo __('Add Post', array('type' => 'file')); ?></legend>
				<?php echo $this->Form->input('category_id',array('type'=>'select','options'=>$list)); ?>
				<?php echo $this->Form->input('user_id',array('type'=>'select','options'=>$users)); ?>
				<?php echo $this->Form->input('title');?> 
				<?php echo $this->Form->input('body');?> 
				<?php echo $this->Form->input('Image.0.Filename',array('type' => 'file','class'=>false));	?> 
				<?php echo $this->Form->input('Tag',array('type'=>'select','options'=>$tag,'multiple' => 'checkbox','size' => 5,'class'=>'checkbox')); ?>
				<div class="form-group">
				<?php echo $this->Form->submit(__('Submit'),array('class'=>'btn btn-primary btn-lg')); ?>
			</div>	
			</form>
			<?php echo $this->Form->end(); ?> 
		</div>
	</div>
</div>
