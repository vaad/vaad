<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('bld_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->bld)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('forum_name')); ?>:
	<?php echo GxHtml::encode($data->forum_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('forum_desc')); ?>:
	<?php echo GxHtml::encode($data->forum_desc); ?>
	<br />
	<?php echo 'מנהל הפורום'; ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->forumMngr)); ?>
	<br />

</div>