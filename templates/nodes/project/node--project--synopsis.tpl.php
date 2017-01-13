<?php //kpr($content); ?>
<?php $ux_icons = '/'.drupal_get_path('theme','cca').'/img/ux-icons/'; ?>
<div class="project-synopsis">
    <div class="project-section project-context">
        <h4>Project Overview</h4>
        <div class="row">
            <div class="project-summary col-xs-8">
                <?php print(render($content['body'])); ?>
            </div>
            <div class="map col-xs-4">
                <div class="panel panel-default">
                    <?php print(render($content['field_coordinates'])); ?>
                    <div class="panel-footer"><p class="small-label">Project Location</div>
                </div>

            </div>
        </div>
    </div>
    <?php if ($content['field_project_results_summary']): ?>
    <div class="project-section project-outcomes">
        <h4>Expected Outcomes</h4>
        <div class="row">
            <div class="project-summary col-xs-12">
                <?php print(render($content['field_project_results_summary'])); ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="project-section project-details">
        <h4>Project Details</h4>
        <div class="row">
            <?php if($content['field_level_of_intervention']): ?>
            <div class="project-data-field col-sm-6">
                <div class="col-xs-2">
                    <img src="<?php print($ux_icons.'icon-intervention-levels.svg'); ?>" />
                    <p class="small-label">Levels of Intervention</p>
                </div>
                <div class="col-xs-10">
                    <?php print(render($content['field_level_of_intervention'])); ?>
                </div>
                <div class="clearfix"></div>
            </div>
            <?php endif; ?>
            <?php if($content['field_funding_source']): ?>
                <div class="project-data-field col-sm-6">
                    <div class="col-xs-2">
                        <img src="<?php print($ux_icons.'icon-funding-source.svg'); ?>" />
                        <p class="small-label">Source of Funds</p>
                    </div>
                    <div class="col-xs-10">
                        <?php print(render($content['field_funding_source'])); ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            <?php endif; ?>
            <?php if($content['field_key_collaborators']): ?>
                <div class="project-data-field col-sm-6">
                    <div class="col-xs-2">
                        <img src="<?php print($ux_icons.'icon-collaboration.svg'); ?>" />
                        <p class="small-label">Key Implementers</p>
                    </div>
                    <div class="col-xs-10">
                        <?php print(render($content['field_key_collaborators'])); ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            <?php endif; ?>
            <?php if($content['field_financing_amount'] || $content['field_cofinancing_total']): ?>
                <div class="project-data-field col-sm-6">
                    <div class="col-xs-2">
                        <img src="<?php print($ux_icons.'icon-funding.svg'); ?>" />
                        <p class="small-label">Funding Amounts</p>
                    </div>
                    <div class="col-xs-10">
                        <?php print(render($content['field_financing_amount'])); ?>
                        <?php print(render($content['field_cofinancing_total'])); ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            <?php endif; ?>
            <?php if($content['field_partners']): ?>
                <div class="project-data-field col-sm-6">
                    <div class="col-xs-2">
                        <img src="<?php print($ux_icons.'icon-partners.svg'); ?>" />
                        <p class="small-label">Project Partners</p>
                    </div>
                    <div class="col-xs-10">
                        <?php print(render($content['field_partners'])); ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            <?php endif; ?>
            <?php if($content['field_project_dates']): ?>
                <div class="project-data-field col-sm-6">
                    <div class="col-xs-2">
                        <img src="<?php print($ux_icons.'icon-project-implementation.svg'); ?>" />
                        <p class="small-label">Project Dates</p>
                    </div>
                    <div class="col-xs-10">
                        <?php print(render($content['field_project_dates'])); ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            <?php endif; ?>
        </div>
    </div>


</div>