<div class="view postit">

    <?php echo GxHtml::link(GxHtml::encode($data->tkt_title), array('view', 'id' => $data->id)); ?>
    <br />

    <?php echo GxHtml::encode(GxHtml::valueEx($data->tktStatus)); ?>
    <br />
    <?php echo 'נפתחה על ידי'; ?>:
    <?php echo GxHtml::encode(GxHtml::valueEx($data->tnt)); ?>
    <br />
    <?php /*echo GxHtml::encode($data->getAttributeLabel('tkt_opendate')); */ ?>
    <?php echo GxHtml::encode($data->tkt_opendate); ?>
    <br />
    <?php echo GxHtml::encode($data->getAttributeLabel('tkt_eta')); ?>:
    <?php echo GxHtml::encode($data->tkt_eta); ?>
    <br />
    <?php /*
      <?php echo GxHtml::encode($data->getAttributeLabel('tkt_closedate')); ?>:
      <?php echo GxHtml::encode($data->tkt_closedate); ?>
      <br />
     */ ?>

</div>