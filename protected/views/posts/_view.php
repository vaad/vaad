<div class="view">


	<?php echo GxHtml::encode($data->title); ?>
	<?php echo 'מאת'; ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->author)); ?>
		<?php echo '<span class="left">' . GxHtml::encode(GxHtml::valueEx($data->pstStatus)) . "</span>"; ?>
	<br />
	<?php echo $data->content_txt; ?>
	<br />
	<?php echo GxHtml::encode($data->pst_picture); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('create_time')); ?>:
	<?php echo GxHtml::encode($data->create_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('update_time')); ?>:
	<?php echo GxHtml::encode($data->update_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('forum_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->forum)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('adding_comments')); ?>:
	<?php echo GxHtml::encode($data->adding_comments); ?>
	<br />
	*/ ?>

</div>