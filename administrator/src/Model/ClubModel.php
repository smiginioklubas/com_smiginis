<?php

namespace Smiginis\Component\Smiginis\Administrator\Model;

\defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Model\AdminModel;
use Joomla\CMS\Date\Date;

class ClubModel extends AdminModel
{
    public function getTable($type = 'Club', $prefix = 'Smiginis\\Component\\Smiginis\\Administrator\\Table\\', $config = [])
    {
        return parent::getTable($type, $prefix, $config);
    }

    public function getForm($data = [], $loadData = true)
    {
        $form = $this->loadForm('com_smiginis.club', 'club', ['control' => 'jform', 'load_data' => $loadData]);

        if (empty($form)) {
            return false;
        }

        return $form;
    }

    protected function loadFormData()
    {
        $data = Factory::getApplication()->getUserState('com_smiginis.edit.club.data', []);

        if (empty($data)) {
            $data = $this->getItem();
        }

        return $data;
    }

    protected function prepareTable($table)
    {
        $date = new Date;

        if (empty($table->id)) {
            $table->created = $date->toSql();
        }

        $table->modified = $date->toSql();
    }
}
