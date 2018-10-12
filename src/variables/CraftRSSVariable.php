<?php

namespace Guilty\CraftRSS\variables;


/**
 * @author    Guilty AS
 * @package   HubspotConnector
 * @since     1.0.0
 */
class CraftRSSVariable
{

    public function loadRss($url)
    {
        // TODO(11 okt 2018) ~ Helge: Wrap in array
        try {
            return \Feed::loadRss($url)->toArray();
        } catch (\FeedException $e) {
            return false;
        }
    }

    public function loadAtom($url)
    {
        try {
            return \Feed::loadAtom($url)->toArray();
        } catch (\FeedException $e) {
            return false;
        }
    }
}