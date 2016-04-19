<div class="panel-display panel-3col clearfix row" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <div class="panel-panel panel-col-first col-md-4">
        <div class="inside"><?php print $content['left']; ?></div>
    </div>

    <div class="panel-panel panel-col col-md-4">
        <div class="inside"><?php print $content['middle']; ?></div>
    </div>

    <div class="panel-panel panel-col-last col-md-4">
        <div class="inside"><?php print $content['right']; ?></div>
    </div>
</div>