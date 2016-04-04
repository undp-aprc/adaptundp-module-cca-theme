<div class="col-sm-4 col-xs-height">
    <a href="/node/<?php print($node->nid); ?>">
        <div class="cca-content-box photo-box caption-bottom primary">
            <?php print render($content['field_display_photo']); ?>
            <h4><?php print($variables['title']); ?></h4>
            <?php print render($content['body']); ?>
        </div>
    </a>
    </a>
</div>
