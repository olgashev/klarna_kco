<?php
/**
 * Copyright 2018 Klarna Bank AB (publ)
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @category   Klarna
 * @package    Klarna_Kco
 * @author     Jason Grim <jason.grim@klarna.com>
 */

/**
 * External methods config source
 */
class Klarna_Kco_Model_System_Config_Source_Externalmethods
{
    /**
     * External payment methods options array
     *
     * @var array
     */
    protected $_options;

    /**
     * Get external payment
     *
     * @return array
     */
    public function toOptionArray()
    {
        if (null === $this->_options) {
            $this->_options  = array();
            $externalMethods = Mage::getConfig()->getNode('klarna/external_payment_methods');

            if ($externalMethods) {
                foreach ($externalMethods->children() as $payment) {
                    $this->_options[] = array(
                        'label' => (string)$payment->label,
                        'value' => $payment->getName()
                    );
                }

                array_unshift($this->_options, array('value' => -1, 'label' => ''));
            }
        }

        return $this->_options;
    }
}
