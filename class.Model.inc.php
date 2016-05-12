<?php

/**
 *  Share interface for interactions.
 *  Общий интерфейс для взаимодействий.
 */
interface Model {
    /**
     * Load a model.
     * Загружает модел из БД по индентификатору адреса.
     * @param int $address_id индентификатор адресса
     */
    static function load($address_id);

    /**
     *  Save a model.
     */
    function save();
}