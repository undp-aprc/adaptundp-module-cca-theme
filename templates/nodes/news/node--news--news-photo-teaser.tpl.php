<?php
    
?>
<div class="col-sm-4 col-xs-height">
        <a href="<?php print($node_url); ?>">
            <div class="cca-content-box photo-box caption-bottom primary">
                <?php print render($content['field_photo']); ?>
                <h2><?php print($variables['title']); ?></h2>
                <?php print render($content['body']); ?>
            </div>
        </a>
    </a>
</div>