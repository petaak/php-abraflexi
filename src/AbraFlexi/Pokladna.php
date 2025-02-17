<?php

declare(strict_types=1);

/**
 * AbraFlexi - Objekt pokladny.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Pokladna
 *
 * @link https://demo.flexibee.eu/c/demo/pokladna/properties
 */
class Pokladna extends RW {

    use stitky;
    use getChanges;

    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'pokladna';

    /**
     * Add Data to invoice subItem
     *
     * @see Relations
     *
     * @param array   $data pole dat
     * @param string  $relationPath path evidence (relation) pro vkládaná data
     * @param boolean $removeAll
     *
     * @return boolean Operation success
     */
    public function addArrayToBranch($data, $relationPath = 'polozkyIntDokladu',
            $removeAll = false) {
        return parent::addArrayToBranch($data, $relationPath, $removeAll);
    }

}
