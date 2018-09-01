<?php

namespace Facebook\WebDriver\Html5;

/**
 * Represents the session storage for the site currently opened in the browser.
 */
interface SessionStorage
{
    /**
     * Remove all of the items from the storage.
     */
    public function clear();

    /**
     * Retrieve an item from the storage.
     *
     * @param string $key
     *
     * @return string
     */
    public function getItem($key);

    /**
     * Get all the keys in storage.
     *
     * @return string[]
     */
    public function keySet();

    /**
     * Remove a single item from the storage.
     *
     * @param string $key
     *
     * @return string
     */
    public function removeItem($key);

    /**
     * Set an item in the storage.
     *
     * @param string $key
     * @param string $value
     *
     * @return string
     */
    public function setItem($key, $value);

    /**
     * Get the number of keys in the storage.
     *
     * @return int
     */
    public function size();
}
