<?php

namespace Guilty\CraftRSS;

use craft\base\Plugin;
use craft\web\twig\variables\CraftVariable;
use Guilty\CraftRSS\variables\CraftRSSVariable;
use yii\base\Event;


class CraftRSS extends Plugin
{

    /**
     * @var string
     */
    public $schemaVersion = '1.0.1';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        Event::on(CraftVariable::class, CraftVariable::EVENT_INIT, function (Event $event) {
            $event->sender->set('rss', CraftRSSVariable::class);
        });
    }
}