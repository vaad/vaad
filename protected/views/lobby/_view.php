<div class="view post">


<?php
    //var_dump($data);
?>
    <span class="title">
    <?php echo GxHtml::link(GxHtml::encode($data->title), array('/posts/view', 'id' => $data->id)); ?>
    </span>
    <span class="left">
        <?php echo Yii::t('app', GxHtml::encode($data->getAttributeLabel('posted_by'))); ?>
        <?php echo GxHtml::link(GxHtml::encode($data->author), array('/tenants/view', 'id' => $data->author_id)); ?>
    </span>
    <br />

    <?php echo $data->content_txt; ?>
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