<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\modules\config;

/**
 * Description of config
 *
 * @author Скаймер
 */
class config {

    protected $data = array();

    public function init() {
        $items = Config::model()->findAll();
        foreach ($items as $item) {
            if ($item->param)
                $this->data[$item->param] = $item->value === '' ? $item->default : $item->value;
        }
        parent::init();
    }

    public function get($key) {
        if (array_key_exists($key, $this->data)) {
            return $this->data[$key];
        } else {
            throw new CException('Undefined parameter ' . $key);
        }
    }

    public function set($key, $value) {
        $model = Config::model()->findByAttributes(array('param' => $key));
        if (!$model)
            throw new CException('Undefined parameter ' . $key);

        $this->data[$key] = $value;
        $model->value = $value;
        $model->save();
    }

}
