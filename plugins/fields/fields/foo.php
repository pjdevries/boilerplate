<?php
/**
 * @package    [PACKAGE_NAME]
 *
 * @author     [AUTHOR] <[AUTHOR_EMAIL]>
 * @copyright  [COPYRIGHT]
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       [AUTHOR_URL]
 */

defined('_JEXEC') or die;

JFormHelper::loadFieldClass('text');

/**
 * Joomlathing field plugin.
 *
 * @package   [PACKAGE_NAME]
 * @since     1.0.0.0
 */
class JFormFieldJoomlathing extends JFormFieldText
{
    protected $type = 'Joomlathing';
}
