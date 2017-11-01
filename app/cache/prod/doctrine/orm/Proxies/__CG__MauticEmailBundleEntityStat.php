<?php

namespace Proxies\__CG__\Mautic\EmailBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Stat extends \Mautic\EmailBundle\Entity\Stat implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'id', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'email', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'lead', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'emailAddress', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'list', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'ipAddress', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'dateSent', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'isRead', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'isFailed', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'viewedInBrowser', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'dateRead', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'trackingHash', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'retryCount', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'source', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'sourceId', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'tokens', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'storedCopy', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'openCount', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'lastOpened', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'openDetails');
        }

        return array('__isInitialized__', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'id', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'email', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'lead', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'emailAddress', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'list', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'ipAddress', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'dateSent', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'isRead', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'isFailed', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'viewedInBrowser', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'dateRead', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'trackingHash', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'retryCount', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'source', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'sourceId', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'tokens', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'storedCopy', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'openCount', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'lastOpened', '' . "\0" . 'Mautic\\EmailBundle\\Entity\\Stat' . "\0" . 'openDetails');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Stat $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getDateRead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateRead', array());

        return parent::getDateRead();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateRead($dateRead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateRead', array($dateRead));

        return parent::setDateRead($dateRead);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateSent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateSent', array());

        return parent::getDateSent();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateSent($dateSent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateSent', array($dateSent));

        return parent::setDateSent($dateSent);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(\Mautic\EmailBundle\Entity\Email $email = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getIpAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpAddress', array());

        return parent::getIpAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpAddress(\Mautic\CoreBundle\Entity\IpAddress $ip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpAddress', array($ip));

        return parent::setIpAddress($ip);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsRead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsRead', array());

        return parent::getIsRead();
    }

    /**
     * {@inheritDoc}
     */
    public function isRead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRead', array());

        return parent::isRead();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsRead($isRead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsRead', array($isRead));

        return parent::setIsRead($isRead);
    }

    /**
     * {@inheritDoc}
     */
    public function getLead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLead', array());

        return parent::getLead();
    }

    /**
     * {@inheritDoc}
     */
    public function setLead(\Mautic\LeadBundle\Entity\Lead $lead = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLead', array($lead));

        return parent::setLead($lead);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrackingHash()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrackingHash', array());

        return parent::getTrackingHash();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrackingHash($trackingHash)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrackingHash', array($trackingHash));

        return parent::setTrackingHash($trackingHash);
    }

    /**
     * {@inheritDoc}
     */
    public function getList()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getList', array());

        return parent::getList();
    }

    /**
     * {@inheritDoc}
     */
    public function setList($list)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setList', array($list));

        return parent::setList($list);
    }

    /**
     * {@inheritDoc}
     */
    public function getRetryCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetryCount', array());

        return parent::getRetryCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setRetryCount($retryCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRetryCount', array($retryCount));

        return parent::setRetryCount($retryCount);
    }

    /**
     * {@inheritDoc}
     */
    public function upRetryCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upRetryCount', array());

        return parent::upRetryCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getIsFailed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsFailed', array());

        return parent::getIsFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsFailed($isFailed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsFailed', array($isFailed));

        return parent::setIsFailed($isFailed);
    }

    /**
     * {@inheritDoc}
     */
    public function isFailed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isFailed', array());

        return parent::isFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailAddress', array());

        return parent::getEmailAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailAddress($emailAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailAddress', array($emailAddress));

        return parent::setEmailAddress($emailAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getViewedInBrowser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getViewedInBrowser', array());

        return parent::getViewedInBrowser();
    }

    /**
     * {@inheritDoc}
     */
    public function setViewedInBrowser($viewedInBrowser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setViewedInBrowser', array($viewedInBrowser));

        return parent::setViewedInBrowser($viewedInBrowser);
    }

    /**
     * {@inheritDoc}
     */
    public function getSource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSource', array());

        return parent::getSource();
    }

    /**
     * {@inheritDoc}
     */
    public function setSource($source)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSource', array($source));

        return parent::setSource($source);
    }

    /**
     * {@inheritDoc}
     */
    public function getSourceId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSourceId', array());

        return parent::getSourceId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSourceId($sourceId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSourceId', array($sourceId));

        return parent::setSourceId($sourceId);
    }

    /**
     * {@inheritDoc}
     */
    public function getTokens()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTokens', array());

        return parent::getTokens();
    }

    /**
     * {@inheritDoc}
     */
    public function setTokens($tokens)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTokens', array($tokens));

        return parent::setTokens($tokens);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpenCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpenCount', array());

        return parent::getOpenCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setOpenCount($openCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpenCount', array($openCount));

        return parent::setOpenCount($openCount);
    }

    /**
     * {@inheritDoc}
     */
    public function addOpenDetails($details)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOpenDetails', array($details));

        return parent::addOpenDetails($details);
    }

    /**
     * {@inheritDoc}
     */
    public function upOpenCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upOpenCount', array());

        return parent::upOpenCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastOpened()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastOpened', array());

        return parent::getLastOpened();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastOpened($lastOpened)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastOpened', array($lastOpened));

        return parent::setLastOpened($lastOpened);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpenDetails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpenDetails', array());

        return parent::getOpenDetails();
    }

    /**
     * {@inheritDoc}
     */
    public function setOpenDetails($openDetails)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpenDetails', array($openDetails));

        return parent::setOpenDetails($openDetails);
    }

    /**
     * {@inheritDoc}
     */
    public function getStoredCopy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStoredCopy', array());

        return parent::getStoredCopy();
    }

    /**
     * {@inheritDoc}
     */
    public function setStoredCopy(\Mautic\EmailBundle\Entity\Copy $storedCopy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStoredCopy', array($storedCopy));

        return parent::setStoredCopy($storedCopy);
    }

}