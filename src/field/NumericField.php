<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace org\majkel\dbase\field;

use \org\majkel\dbase\Field;

/**
 * Description of Field
 *
 * @author majkel
 */
class NumericField extends Field {

    /**
     * {@inheritdoc}
     */
    public function toData($value) {
        return strval((integer)$value);
    }

    /**
     * {@inheritdoc}
     */
    public function fromData($data) {
        return (integer)$data;
    }

    /**
     * {@inheritdoc}
     */
    public function getType() {
        return Field::TYPE_NUMERIC;
    }

}