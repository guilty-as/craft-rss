<?php

namespace Guilty\CraftRSS\variables;


/**
 * @author    Guilty AS
 * @package   CraftRSS
 * @since     1.0.0
 */
class CraftRSSVariable
{

    public function loadRss($url)
    {
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
