<?php

defined('_JEXEC') or die;

use Joomla\CMS\Router\Route;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;

?>
<form action="<?php echo Route::_('index.php?option=com_smiginis&task=club.save'); ?>" method="post" name="adminForm" id="club-form" class="form-validate">
    <div class="row">
        <div class="col-md-8">
            <fieldset class="fieldset">
                <legend><?php echo Text::_('COM_SMIGINIS_CLUB_DETAILS'); ?></legend>
                <?php foreach ($this->form->getFieldset('club') as $field) : ?>
                    <div class="mb-3">
                        <?php echo $field->label; ?>
                        <?php echo $field->input; ?>
                    </div>
                <?php endforeach; ?>
            </fieldset>
        </div>
    </div>

    <input type="hidden" name="task" value="" />
    <?php echo HTMLHelper::_('form.token'); ?>
</form>
