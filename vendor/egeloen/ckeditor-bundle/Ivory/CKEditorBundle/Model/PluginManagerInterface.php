<?php

/*
 * This file is part of the Ivory CKEditor package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\CKEditorBundle\Model;

/**
 * Ivory CKEditor plugin manager.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
interface PluginManagerInterface
{
    /**
     * Checks if the CKEditor plugins exists.
     *
     * @return boolean TRUE if the CKEditor plugins exists else FALSE.
     */
    function hasPlugins();

    /**
     * Gets the CKEditor plugins.
     *
     * @return array The CKEditor plugins.
     */
    function getPlugins();

    /**
     * Sets the CKEditor plugins.
     *
     * @param array $plugins The CKEditor plugins.
     */
    function setPlugins(array $plugins);

    /**
     * Checks if a specific CKEditor plugin exists.
     *
     * @param string $name The CKEditor plugin name.
     *
     * @return boolean TRUE if the CKEditor plugin exists else FALSE.
     */
    function hasPlugin($name);

    /**
     * Gets a specific CKEditor plugin.
     *
     * @param string $name The CKEditor name.
     *
     * @return array The CKEditor plugin.
     */
    function getPlugin($name);

    /**
     * Sets a CKEditor plugin.
     *
     * @param string $name   The CKEditor plugin name.
     * @param array  $plugin The CKEditor plugin.
     */
    function setPlugin($name, array $plugin);
}
