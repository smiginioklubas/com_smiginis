<?php

namespace Smiginis\Component\Smiginis\Administrator\Model;

\defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Model\ListModel;
use Joomla\CMS\Language\Text;

class ClubsModel extends ListModel
{
    protected function populateState($ordering = 'a.ordering', $direction = 'asc')
    {
        $app = Factory::getApplication();
        $search = $app->getUserStateFromRequest($this->context . '.filter.search', 'filter_search', '', 'string');
        $published = $app->getUserStateFromRequest($this->context . '.filter.published', 'filter_published', '', 'string');

        $this->setState('filter.search', $search);
        $this->setState('filter.published', $published);

        parent::populateState($ordering, $direction);
    }

    protected function getListQuery()
    {
        $db = $this->getDbo();
        $query = $db->getQuery(true);

        $query->select($db->quoteName([
            'a.id',
            'a.name',
            'a.city',
            'a.country',
            'a.published',
            'a.ordering',
            'a.created',
            'a.modified'
        ]));
        $query->from($db->quoteName('#__dart_clubs', 'a'));

        $published = $this->getState('filter.published');
        if ($published !== '') {
            $query->where($db->quoteName('a.published') . ' = ' . (int) $published);
        }

        $search = $this->getState('filter.search');
        if ($search) {
            $search = $db->quote('%' . $db->escape($search, true) . '%', false);
            $query->where('(' . $db->quoteName('a.name') . ' LIKE ' . $search . ' OR ' . $db->quoteName('a.city') . ' LIKE ' . $search . ')');
        }

        $orderCol = $this->getState('list.ordering', 'a.ordering');
        $orderDirn = $this->getState('list.direction', 'asc');
        $query->order($db->escape($orderCol . ' ' . $orderDirn));

        return $query;
    }

    public function getItems()
    {
        return parent::getItems();
    }
}
