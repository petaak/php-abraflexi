<?php

declare(strict_types=1);

/**
 * AbraFlexi - Summary support
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2018-2019 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Add for evidencies with Summary support
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
trait sum {

    /**
     * Vrací z AbraFlexi sumaci i podle podmínek.
     *
     * @param array           $conditions  pole podmínek nebo ID záznamu
     *
     * @return array
     */
    public function getSumFromAbraFlexi($conditions = []) {
        $flexiData = $this->getFlexiData('$sum', $conditions);
        return empty($flexiData) ? null : $flexiData['sum'];
    }

}
