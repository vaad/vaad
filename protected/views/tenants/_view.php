<div class="view postit">

    <?php $name = $data->tnt_first_name . ' ' . $data->tnt_last_name; ?>
    <?php echo GxHtml::link(GxHtml::encode($name), array('view', 'id' => $data->id)); ?>
    <br />
    <?php echo GxHtml::encode($data->getAttributeLabel('דירה מספר')); ?>:
    <?php echo GxHtml::encode(GxHtml::valueEx($data->tntAppNum)); ?>
    <br />
      <?php echo GxHtml::encode($data->getAttributeLabel('tnt_email')); ?>:
      <?php echo GxHtml::encode($data->tnt_email); ?>
      <br />
      <?php if (!empty($data->tnt_app_phone)) { ?>
      <?php echo GxHtml::encode($data->getAttributeLabel('tnt_app_phone')); ?>:
      <?php echo GxHtml::encode($data->tnt_app_phone); ?>
      <br />
      <?php } ?>
      <?php echo GxHtml::encode($data->getAttributeLabel('tnt_mobile')); ?>:
      <?php echo GxHtml::encode($data->tnt_mobile); ?>
      <br />
    <?php /*
      <?php echo GxHtml::encode($data->getAttributeLabel('tnt_birthday')); ?>:
      <?php echo GxHtml::encode($data->tnt_birthday); ?>
      <br />
      <?php echo GxHtml::encode($data->getAttributeLabel('tnt_picture')); ?>:
      <?php echo GxHtml::encode($data->tnt_picture); ?>
      <br />
      <?php echo GxHtml::encode($data->getAttributeLabel('tnt_entry_date')); ?>:
      <?php echo GxHtml::encode($data->tnt_entry_date); ?>
      <br />
      <?php echo GxHtml::encode($data->getAttributeLabel('tnt_prev_debt')); ?>:
      <?php echo GxHtml::encode($data->tnt_prev_debt); ?>
      <br />
      <?php echo GxHtml::encode($data->getAttributeLabel('tnt_occupation')); ?>:
      <?php echo GxHtml::encode($data->tnt_occupation); ?>
      <br />
      <?php echo GxHtml::encode($data->getAttributeLabel('tnt_is_vaad')); ?>:
      <?php echo GxHtml::encode($data->tnt_is_vaad); ?>
      <br />
      <?php echo GxHtml::encode($data->getAttributeLabel('tnt_is_owner')); ?>:
      <?php echo GxHtml::encode($data->tnt_is_owner); ?>
      <br />
      <?php echo GxHtml::encode($data->getAttributeLabel('tnt_is_site_vaad')); ?>:
      <?php echo GxHtml::encode($data->tnt_is_site_vaad); ?>
      <br />
      <?php echo GxHtml::encode($data->getAttributeLabel('tnt_is_nbrhd_vaad')); ?>:
      <?php echo GxHtml::encode($data->tnt_is_nbrhd_vaad); ?>
      <br />
      <?php echo GxHtml::encode($data->getAttributeLabel('tnt_is_city_vaad')); ?>:
      <?php echo GxHtml::encode($data->tnt_is_city_vaad); ?>
      <br />
      <?php echo GxHtml::encode($data->getAttributeLabel('tnt_is_admin')); ?>:
      <?php echo GxHtml::encode($data->tnt_is_admin); ?>
      <br />
     */ ?>

</div>