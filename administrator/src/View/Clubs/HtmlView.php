<?php

namespace Smiginis\Component\Smiginis\Administrator\View\Clubs;

\defined('_JEXEC') or die;

use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;
use Joomla\CMS\Toolbar\ToolbarHelper;
use Joomla\CMS\Language\Text;

class HtmlView extends BaseHtmlView
{
    public $items;
    public $pagination;
    public $state;

    public function display($tpl = null)
    {
        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');
        $this->state = $this->get('State');

        $this->addToolbar();

        parent::display($tpl);
    }

    protected function addToolbar(): void
    {
        ToolbarHelper::title(Text::_('COM_SMIGINIS_CLUBS_TITLE'), 'building');
        ToolbarHelper::addNew('club.add', 'JTOOLBAR_NEW');
        ToolbarHelper::publish('clubs.publish', 'JTOOLBAR_PUBLISH');
        ToolbarHelper::unpublish('clubs.unpublish', 'JTOOLBAR_UNPUBLISH');
        ToolbarHelper::deleteList('', 'clubs.delete', 'JTOOLBAR_DELETE');
    }
}
