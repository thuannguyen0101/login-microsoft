<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PstnCallLogRow File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\CallRecords\Model;
/**
* PstnCallLogRow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PstnCallLogRow extends \Microsoft\Graph\Model\Entity
{

    /**
    * Gets the callDurationSource
    *
    * @return PstnCallDurationSource|null The callDurationSource
    */
    public function getCallDurationSource()
    {
        if (array_key_exists("callDurationSource", $this->_propDict)) {
            if (is_a($this->_propDict["callDurationSource"], "\Microsoft\Graph\CallRecords\Model\PstnCallDurationSource") || is_null($this->_propDict["callDurationSource"])) {
                return $this->_propDict["callDurationSource"];
            } else {
                $this->_propDict["callDurationSource"] = new PstnCallDurationSource($this->_propDict["callDurationSource"]);
                return $this->_propDict["callDurationSource"];
            }
        }
        return null;
    }

    /**
    * Sets the callDurationSource
    *
    * @param PstnCallDurationSource $val The value to assign to the callDurationSource
    *
    * @return PstnCallLogRow The PstnCallLogRow
    */
    public function setCallDurationSource($val)
    {
        $this->_propDict["callDurationSource"] = $val;
         return $this;
    }
    /**
    * Gets the calleeNumber
    *
    * @return string|null The calleeNumber
    */
    public function getCalleeNumber()
    {
        if (array_key_exists("calleeNumber", $this->_propDict)) {
            return $this->_propDict["calleeNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the calleeNumber
    *
    * @param string $val The value of the calleeNumber
    *
    * @return PstnCallLogRow
    */
    public function setCalleeNumber($val)
    {
        $this->_propDict["calleeNumber"] = $val;
        return $this;
    }
    /**
    * Gets the callerNumber
    *
    * @return string|null The callerNumber
    */
    public function getCallerNumber()
    {
        if (array_key_exists("callerNumber", $this->_propDict)) {
            return $this->_propDict["callerNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callerNumber
    *
    * @param string $val The value of the callerNumber
    *
    * @return PstnCallLogRow
    */
    public function setCallerNumber($val)
    {
        $this->_propDict["callerNumber"] = $val;
        return $this;
    }
    /**
    * Gets the callId
    *
    * @return string|null The callId
    */
    public function getCallId()
    {
        if (array_key_exists("callId", $this->_propDict)) {
            return $this->_propDict["callId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callId
    *
    * @param string $val The value of the callId
    *
    * @return PstnCallLogRow
    */
    public function setCallId($val)
    {
        $this->_propDict["callId"] = $val;
        return $this;
    }
    /**
    * Gets the callType
    *
    * @return string|null The callType
    */
    public function getCallType()
    {
        if (array_key_exists("callType", $this->_propDict)) {
            return $this->_propDict["callType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callType
    *
    * @param string $val The value of the callType
    *
    * @return PstnCallLogRow
    */
    public function setCallType($val)
    {
        $this->_propDict["callType"] = $val;
        return $this;
    }

    /**
    * Gets the charge
    *
    * @return \Microsoft\Graph\Model\Decimal|null The charge
    */
    public function getCharge()
    {
        if (array_key_exists("charge", $this->_propDict)) {
            if (is_a($this->_propDict["charge"], "\Microsoft\Graph\Model\Decimal") || is_null($this->_propDict["charge"])) {
                return $this->_propDict["charge"];
            } else {
                $this->_propDict["charge"] = new \Microsoft\Graph\Model\Decimal($this->_propDict["charge"]);
                return $this->_propDict["charge"];
            }
        }
        return null;
    }

    /**
    * Sets the charge
    *
    * @param \Microsoft\Graph\Model\Decimal $val The value to assign to the charge
    *
    * @return PstnCallLogRow The PstnCallLogRow
    */
    public function setCharge($val)
    {
        $this->_propDict["charge"] = $val;
         return $this;
    }
    /**
    * Gets the conferenceId
    *
    * @return string|null The conferenceId
    */
    public function getConferenceId()
    {
        if (array_key_exists("conferenceId", $this->_propDict)) {
            return $this->_propDict["conferenceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the conferenceId
    *
    * @param string $val The value of the conferenceId
    *
    * @return PstnCallLogRow
    */
    public function setConferenceId($val)
    {
        $this->_propDict["conferenceId"] = $val;
        return $this;
    }

    /**
    * Gets the connectionCharge
    *
    * @return \Microsoft\Graph\Model\Decimal|null The connectionCharge
    */
    public function getConnectionCharge()
    {
        if (array_key_exists("connectionCharge", $this->_propDict)) {
            if (is_a($this->_propDict["connectionCharge"], "\Microsoft\Graph\Model\Decimal") || is_null($this->_propDict["connectionCharge"])) {
                return $this->_propDict["connectionCharge"];
            } else {
                $this->_propDict["connectionCharge"] = new \Microsoft\Graph\Model\Decimal($this->_propDict["connectionCharge"]);
                return $this->_propDict["connectionCharge"];
            }
        }
        return null;
    }

    /**
    * Sets the connectionCharge
    *
    * @param \Microsoft\Graph\Model\Decimal $val The value to assign to the connectionCharge
    *
    * @return PstnCallLogRow The PstnCallLogRow
    */
    public function setConnectionCharge($val)
    {
        $this->_propDict["connectionCharge"] = $val;
         return $this;
    }
    /**
    * Gets the currency
    *
    * @return string|null The currency
    */
    public function getCurrency()
    {
        if (array_key_exists("currency", $this->_propDict)) {
            return $this->_propDict["currency"];
        } else {
            return null;
        }
    }

    /**
    * Sets the currency
    *
    * @param string $val The value of the currency
    *
    * @return PstnCallLogRow
    */
    public function setCurrency($val)
    {
        $this->_propDict["currency"] = $val;
        return $this;
    }
    /**
    * Gets the destinationContext
    *
    * @return string|null The destinationContext
    */
    public function getDestinationContext()
    {
        if (array_key_exists("destinationContext", $this->_propDict)) {
            return $this->_propDict["destinationContext"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationContext
    *
    * @param string $val The value of the destinationContext
    *
    * @return PstnCallLogRow
    */
    public function setDestinationContext($val)
    {
        $this->_propDict["destinationContext"] = $val;
        return $this;
    }
    /**
    * Gets the destinationName
    *
    * @return string|null The destinationName
    */
    public function getDestinationName()
    {
        if (array_key_exists("destinationName", $this->_propDict)) {
            return $this->_propDict["destinationName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationName
    *
    * @param string $val The value of the destinationName
    *
    * @return PstnCallLogRow
    */
    public function setDestinationName($val)
    {
        $this->_propDict["destinationName"] = $val;
        return $this;
    }
    /**
    * Gets the duration
    *
    * @return int|null The duration
    */
    public function getDuration()
    {
        if (array_key_exists("duration", $this->_propDict)) {
            return $this->_propDict["duration"];
        } else {
            return null;
        }
    }

    /**
    * Sets the duration
    *
    * @param int $val The value of the duration
    *
    * @return PstnCallLogRow
    */
    public function setDuration($val)
    {
        $this->_propDict["duration"] = $val;
        return $this;
    }

    /**
    * Gets the endDateTime
    *
    * @return \DateTime|null The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime") || is_null($this->_propDict["endDateTime"])) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endDateTime
    *
    * @param \DateTime $val The value to assign to the endDateTime
    *
    * @return PstnCallLogRow The PstnCallLogRow
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the id
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return PstnCallLogRow
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the inventoryType
    *
    * @return string|null The inventoryType
    */
    public function getInventoryType()
    {
        if (array_key_exists("inventoryType", $this->_propDict)) {
            return $this->_propDict["inventoryType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inventoryType
    *
    * @param string $val The value of the inventoryType
    *
    * @return PstnCallLogRow
    */
    public function setInventoryType($val)
    {
        $this->_propDict["inventoryType"] = $val;
        return $this;
    }
    /**
    * Gets the licenseCapability
    *
    * @return string|null The licenseCapability
    */
    public function getLicenseCapability()
    {
        if (array_key_exists("licenseCapability", $this->_propDict)) {
            return $this->_propDict["licenseCapability"];
        } else {
            return null;
        }
    }

    /**
    * Sets the licenseCapability
    *
    * @param string $val The value of the licenseCapability
    *
    * @return PstnCallLogRow
    */
    public function setLicenseCapability($val)
    {
        $this->_propDict["licenseCapability"] = $val;
        return $this;
    }
    /**
    * Gets the operator
    *
    * @return string|null The operator
    */
    public function getOperator()
    {
        if (array_key_exists("operator", $this->_propDict)) {
            return $this->_propDict["operator"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operator
    *
    * @param string $val The value of the operator
    *
    * @return PstnCallLogRow
    */
    public function setOperator($val)
    {
        $this->_propDict["operator"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime") || is_null($this->_propDict["startDateTime"])) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    *
    * @param \DateTime $val The value to assign to the startDateTime
    *
    * @return PstnCallLogRow The PstnCallLogRow
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the tenantCountryCode
    *
    * @return string|null The tenantCountryCode
    */
    public function getTenantCountryCode()
    {
        if (array_key_exists("tenantCountryCode", $this->_propDict)) {
            return $this->_propDict["tenantCountryCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantCountryCode
    *
    * @param string $val The value of the tenantCountryCode
    *
    * @return PstnCallLogRow
    */
    public function setTenantCountryCode($val)
    {
        $this->_propDict["tenantCountryCode"] = $val;
        return $this;
    }
    /**
    * Gets the usageCountryCode
    *
    * @return string|null The usageCountryCode
    */
    public function getUsageCountryCode()
    {
        if (array_key_exists("usageCountryCode", $this->_propDict)) {
            return $this->_propDict["usageCountryCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the usageCountryCode
    *
    * @param string $val The value of the usageCountryCode
    *
    * @return PstnCallLogRow
    */
    public function setUsageCountryCode($val)
    {
        $this->_propDict["usageCountryCode"] = $val;
        return $this;
    }
    /**
    * Gets the userDisplayName
    *
    * @return string|null The userDisplayName
    */
    public function getUserDisplayName()
    {
        if (array_key_exists("userDisplayName", $this->_propDict)) {
            return $this->_propDict["userDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userDisplayName
    *
    * @param string $val The value of the userDisplayName
    *
    * @return PstnCallLogRow
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the userId
    *
    * @return string|null The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    *
    * @param string $val The value of the userId
    *
    * @return PstnCallLogRow
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    /**
    * Gets the userPrincipalName
    *
    * @return string|null The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return PstnCallLogRow
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
}
