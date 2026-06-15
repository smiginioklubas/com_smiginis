<?php

namespace Smiginis\Component\Smiginis\Administrator\Table;

\defined('_JEXEC') or die;

use Joomla\CMS\Table\Table;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Date\Date;
use Joomla\Database\DatabaseDriver;

class ClubTable extends Table
{
    public function __construct(DatabaseDriver $db)
    {
        parent::__construct('#__dart_clubs', 'id', $db);
    }

    public function check(): bool
    {
        if (trim($this->name) === '') {
            $this->setError(Text::_('COM_SMIGINIS_ERROR_NAME_REQUIRED'));
            return false;
        }

        return parent::check();
    }

    public function bind($src, $ignore = [])
    {
        if (isset($src['logo']) && is_array($src['logo'])) {
            $src['logo'] = $src['logo']['name'] ?? '';
        }

        return parent::bind($src, $ignore);
    }

    public function store($updateNulls = false)
    {
        $date = new Date;

        if (empty($this->id)) {
            $this->created = $date->toSql();
        }

        $this->modified = $date->toSql();

        if ($this->ordering === null || $this->ordering === '') {
            $this->ordering = $this->getNextOrder();
        }

        return parent::store($updateNulls);
    }
}
