<?php
/**
 * File containing the ConfigSuggestion class.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Bundle\EzPublishCoreBundle\DependencyInjection\Configuration\Suggestion;

/**
 * ConfigSuggestion is a value object holding a suggestion change for semantic configuration.
 * The suggestion can be mandatory or not.
 */
class ConfigSuggestion
{
    /**
     * Message associated to the suggestion.
     * Can be used to add additional hints.
     *
     * @var string
     */
    private $message;

    /**
     * Suggested semantic configuration.
     * Hash as been used with Symfony Config component.
     *
     * @var array
     */
    private $suggestion;

    /**
     * @var bool
     */
    private $mandatory;

    public function __construct( $message = null, array $suggestion = array(), $mandatory = false )
    {
        $this->message = $message;
        $this->suggestion = $suggestion;
        $this->mandatory = $mandatory;
    }

    /**
     * @param string $message
     */
    public function setMessage( $message )
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param array $suggestion
     */
    public function setSuggestion( array $suggestion )
    {
        $this->suggestion = $suggestion;
    }

    /**
     * @return array
     */
    public function getSuggestion()
    {
        return $this->suggestion;
    }

    /**
     * @param boolean $mandatory
     */
    public function setMandatory( $mandatory )
    {
        $this->mandatory = $mandatory;
    }

    /**
     * @return boolean
     */
    public function isMandatory()
    {
        return $this->mandatory;
    }
}
