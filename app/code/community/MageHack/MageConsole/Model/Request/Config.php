<?php
/**
 * @category    MageHack
 * @package     MageHack_MageConsole
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MageHack_MageConsole_Model_Request_Config
    extends MageHack_MageConsole_Model_Abstract
    implements MageHack_MageConsole_Model_Request_Interface
{

//    protected $_attrToShow = array(
//        'store' => 'store',
//        'config' => 'config',
//    );
//
//    protected $_columnWidths = array(
//        'columnWidths' => array(12, 40)
//    );

    /**
     * Set store command
     *
     * @return  MageHack_MageConsole_Model_Abstract
     */
    public function set()
    {
        $this->setType(self::RESPONSE_TYPE_PROMPT);
        $vals = array();
        foreach (Mage::app()->getStores() as $store) {
            $vals[] = array('value' => $store->getId(), 'label'=>$store->getName());
        }
        $this->setMessage(array('label' => 'Set config to:', 'values' => $vals));
        return $this;
    }

    /**
     * Save command
     *
     * @return  MageHack_MageConsole_Model_Abstract
     */
    public function prompt()
    {

    }


    /**
     * Help command
     *
     * @return MageHack_MageConsole_Model_Abstract
     *
     */
    public function help()
    {
        $this->setType(self::RESPONSE_TYPE_MESSAGE);
        $this->setMessage('help was requested for a store command - this is the help message');
        return $this;
    }
}