<?php

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Language\Text;

HTMLHelper::_('behavior.multiselect');

$state = $this->state;
$filterSearch = $state->get('filter.search');
$filterPublished = $state->get('filter.published');
$listOrder = $state->get('list.ordering');
$listDirn = $state->get('list.direction');

$saveOrder = $listOrder === 'a.ordering';
?>
<form action="<?php echo Route::_('index.php?option=com_smiginis&view=clubs'); ?>" method="post" name="adminForm" id="adminForm">
    <div class="row mb-3">
        <div class="col-md-4">
            <div class="input-group">
                <input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($filterSearch); ?>" class="form-control" placeholder="<?php echo Text::_('JSEARCH_FILTER_SUBMIT'); ?>" />
                <button type="submit" class="btn btn-primary"><?php echo Text::_('JSEARCH_FILTER_SUBMIT'); ?></button>
            </div>
        </div>
        <div class="col-md-3">
            <select name="filter_published" class="form-select" onchange="this.form.submit()">
                <option value=""><?php echo Text::_('JOPTION_SELECT_PUBLISHED'); ?></option>
                <option value="1" <?php echo $filterPublished === '1' ? 'selected' : ''; ?>><?php echo Text::_('JPUBLISHED'); ?></option>
                <option value="0" <?php echo $filterPublished === '0' ? 'selected' : ''; ?>><?php echo Text::_('JUNPUBLISHED'); ?></option>
            </select>
        </div>
    </div>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"><?php echo HTMLHelper::_('grid.checkall'); ?></th>
                <th scope="col"><?php echo HTMLHelper::_('grid.sort', Text::_('JGLOBAL_TITLE'), 'a.name', $listDirn, $listOrder); ?></th>
                <th scope="col"><?php echo HTMLHelper::_('grid.sort', Text::_('COM_SMIGINIS_FIELD_CITY_LABEL'), 'a.city', $listDirn, $listOrder); ?></th>
                <th scope="col"><?php echo HTMLHelper::_('grid.sort', Text::_('COM_SMIGINIS_FIELD_COUNTRY_LABEL'), 'a.country', $listDirn, $listOrder); ?></th>
                <th scope="col"><?php echo HTMLHelper::_('grid.sort', Text::_('JSTATUS'), 'a.published', $listDirn, $listOrder); ?></th>
                <th scope="col"><?php echo HTMLHelper::_('grid.sort', Text::_('JGRID_HEADING_ORDERING'), 'a.ordering', $listDirn, $listOrder); ?></th>
                <th scope="col"><?php echo HTMLHelper::_('grid.sort', Text::_('JDATE'), 'a.created', $listDirn, $listOrder); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->items as $i => $item) : ?>
                <tr>
                    <td><?php echo HTMLHelper::_('grid.id', $i, $item->id); ?></td>
                    <td>
                        <a href="<?php echo Route::_('index.php?option=com_smiginis&task=club.edit&id=' . (int) $item->id); ?>">
                            <?php echo $this->escape($item->name); ?>
                        </a>
                    </td>
                    <td><?php echo $this->escape($item->city); ?></td>
                    <td><?php echo $this->escape($item->country); ?></td>
                    <td><?php echo HTMLHelper::_('jgrid.published', $item->published, $i, 'clubs.', true); ?></td>
                    <td><?php echo $item->ordering; ?></td>
                    <td><?php echo $this->escape($item->created); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php echo $this->pagination->getListFooter(); ?>

    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <?php echo HTMLHelper::_('form.token'); ?>
</form>
