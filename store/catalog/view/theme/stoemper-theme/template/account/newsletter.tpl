<?php echo $header; ?>
<?php echo $column_left; ?>
<div id="content" class="col-md-8">
<?php echo $content_top; ?>
  <div class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
    <?php } ?>
  </div>
  <h1><?php echo $heading_title; ?></h1>
  <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
    <div class="content">
      <table class="form">
        <tr>
          <td><h4><?php echo $entry_newsletter; ?></h4></td>
          <td class="checkbox"><?php if ($newsletter) { ?>
            <input type="radio" name="newsletter" value="1" checked="checked" />
            <?php echo $text_yes; ?>&nbsp;
            <input type="radio" name="newsletter" value="0" />
            <?php echo $text_no; ?>
            <?php } else { ?>
            <input type="radio" name="newsletter" value="1" />
            <?php echo $text_yes; ?>&nbsp;
            <input type="radio" name="newsletter" value="0" checked="checked" />
            <?php echo $text_no; ?>
            <?php } ?></td>
        </tr>
      </table>
    </div>
    <div class="buttons">
      <div class="left"><a href="<?php echo $back; ?>" class="btn btn-primary"><?php echo $button_back; ?></a></div>
      <div class="right"><input type="submit" value="<?php echo $button_continue; ?>" class="btn btn-primary" /></div>
    </div>
  </form>
  <?php echo $content_bottom; ?></div>
  <div id="column-right" class="col-sm-12 col-md-4">
  <?php echo $column_right; ?>
  </div>
<?php echo $footer; ?>