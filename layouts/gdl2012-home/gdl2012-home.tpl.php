<div class="panel-display panel-gdl2012-home clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-panel panel-sidebar-left alpha grid16-10">
    <div class="inside"><?php print $content['left']; ?><div class="clear">&nbsp;</div></div>
  </div>

  <div class="panel-panel panel-sidebar-right omega grid16-6">
    <div class="inside"><?php print $content['right']; ?></div>
  </div>
  <div class="clear">&nbsp;</div>

  <div class="panel-sponsors grid16-16">
    <div class="inside"><?php print $content['sponsors'];?></div>
  </div>
</div>
