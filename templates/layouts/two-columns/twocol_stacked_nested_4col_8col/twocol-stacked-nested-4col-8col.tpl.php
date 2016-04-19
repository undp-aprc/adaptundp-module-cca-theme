<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * additional areas for the top and the bottom.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['top']: Content in the top row.
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 *   - $content['bottom']: Content in the bottom row.
 */
?>
<div class="panel-2col-stacked-nested clearfix panel-display row" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if ($content['top']): ?>
    <div class="panel-col-top panel-panel col-md-12">
      <?php print $content['top']; ?>
    </div>
  <?php endif; ?>
  <div class="center-wrapper clearfix">
    <div class="panel-col-first panel-panel col-md-4">
      <?php print $content['left']; ?>
    </div>
    <div class="panel-col-last panel-panel col-md-8">
      <?php print $content['right']; ?>
        <div class="panel-col-last-nested row">
            <div class="panel-col-last-nested-left panel-panel col-md-6">
                <?php print $content['right_lower_left']; ?>
            </div>
            <div class="panel-col-last-nested-right panel-panel col-md-6">
                <?php print $content['right_lower_right']; ?>
            </div>
        </div>
    </div>
  </div>
  <?php if ($content['bottom']): ?>
    <div class="panel-col-bottom panel-panel col-md-12">
      <?php print $content['bottom']; ?>
    </div>
  <?php endif; ?>
</div>
