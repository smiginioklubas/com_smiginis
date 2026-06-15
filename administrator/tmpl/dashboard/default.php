<?php
defined('_JEXEC') or die;
?>

<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="mb-3"><?php echo \JText::_('COM_SMIGINIS_DASHBOARD_TITLE'); ?></h1>
            <p class="text-muted"><?php echo \JText::_('COM_SMIGINIS_DASHBOARD_DESC'); ?></p>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex align-items-start gap-3">
                    <span class="bi bi-people fs-1 text-primary"></span>
                    <div>
                        <h3 class="h5"><?php echo \JText::_('COM_SMIGINIS_PLAYERS_TITLE'); ?></h3>
                        <p class="mb-0 text-muted"><?php echo \JText::_('COM_SMIGINIS_CARD_PLAYERS'); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex align-items-start gap-3">
                    <span class="bi bi-building fs-1 text-success"></span>
                    <div>
                        <h3 class="h5"><?php echo \JText::_('COM_SMIGINIS_CLUBS_TITLE'); ?></h3>
                        <p class="mb-0 text-muted"><?php echo \JText::_('COM_SMIGINIS_CARD_CLUBS'); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex align-items-start gap-3">
                    <span class="bi bi-trophy fs-1 text-warning"></span>
                    <div>
                        <h3 class="h5"><?php echo \JText::_('COM_SMIGINIS_TOURNAMENTS_TITLE'); ?></h3>
                        <p class="mb-0 text-muted"><?php echo \JText::_('COM_SMIGINIS_CARD_TOURNAMENTS'); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex align-items-start gap-3">
                    <span class="bi bi-controller fs-1 text-info"></span>
                    <div>
                        <h3 class="h5"><?php echo \JText::_('COM_SMIGINIS_MATCHES_TITLE'); ?></h3>
                        <p class="mb-0 text-muted"><?php echo \JText::_('COM_SMIGINIS_CARD_MATCHES'); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex align-items-start gap-3">
                    <span class="bi bi-info-circle fs-1 text-secondary"></span>
                    <div>
                        <h3 class="h5"><?php echo \JText::_('COM_SMIGINIS_VERSION_TITLE'); ?></h3>
                        <p class="mb-0 text-muted"><?php echo \JText::_('COM_SMIGINIS_CARD_VERSION'); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex align-items-start gap-3">
                    <span class="bi bi-shield-check fs-1 text-danger"></span>
                    <div>
                        <h3 class="h5"><?php echo \JText::_('COM_SMIGINIS_SYSTEM_STATUS_TITLE'); ?></h3>
                        <p class="mb-0 text-muted"><?php echo \JText::_('COM_SMIGINIS_CARD_SYSTEM_STATUS'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
