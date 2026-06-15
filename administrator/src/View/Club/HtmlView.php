<?php

namespace Smiginis\Component\Smiginis\Administrator\View\Club;

\defined('_JEXEC') or die;

use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;
use Joomla\CMS\Toolbar\ToolbarHelper;
use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;

class HtmlView extends BaseHtmlView
{
    public $form;
    public $item;

    public function display($tpl = null)
    {
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');

        $this->addToolbar();

        parent::display($tpl);
    }

    protected function addToolbar(): void
    {
        $isNew = empty($this->item->id);
        $title = $isNew ? Text::_('COM_SMIGINIS_NEW_CLUB_TITLE') : Text::_('COM_SMIGINIS_EDIT_CLUB_TITLE');

        ToolbarHelper::title($title, 'building');
        ToolbarHelper::apply('club.apply', 'JTOOLBAR_APPLY');
        ToolbarHelper::save('club.save', 'JTOOLBAR_SAVE');
        ToolbarHelper::save2new('club.save2new', 'JTOOLBAR_SAVE_AND_NEW');
        ToolbarHelper::cancel('club.cancel', $isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE');
    }
}
