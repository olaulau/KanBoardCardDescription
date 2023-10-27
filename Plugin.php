<?php

namespace Kanboard\Plugin\KanBoardCardDescription;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->hook->attach('template:board:private:task:after-title', 'KanBoardCardDescription:card_description/add_description');
    }

    public function getPluginName()
    {
        return 'Card Description';
    }

    public function getPluginDescription()
    {
        return 'Simple plugins which adds description on task card.';
    }

    public function getPluginAuthor()
    {
        return 'olaulau';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/olaulau/KanBoardCardDescription';
    }
}

