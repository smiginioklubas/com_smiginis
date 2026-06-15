<?php

namespace Smiginis\Component\Smiginis\Administrator\View\Clubs;

\defined('_JEXEC') or die;

use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;
use Joomla\CMS\Toolbar\ToolbarHelper;

class HtmlView extends BaseHtmlView
{
    public function display($tpl = null)
    {
        $this->addToolbar();
        parent::display($tpl);
    }

    protected function addToolbar(): void
    {
        ToolbarHelper::title(\JText::_('COM_SMIGINIS_CLUBS_TITLE'), 'building');
    }
}
