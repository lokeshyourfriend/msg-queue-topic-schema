<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Lokeshyourfriend\MsgQueueTopicSchema\Model;

/**
 * Class for testing synchronous queue handlers.
 */
class SyncHandler
{
    private \Psr\Log\LoggerInterface $_logger;
 
    public function __construct(
        \Psr\Log\LoggerInterface $logger
    )
    {        
        $this->_logger = $logger;
    }
    /**
     * @param string
     * @return string
     */
    public function methodWithStringParam($param = "textc")
    {
        $this->_logger->debug('Here This is asynchrous webapi consumer handler');
        return 'Processed: ' . $param;
    }

    /**
     * @param bool
     * @return bool
     */
    public function methodWithBoolParam($param = false)
    {
        $this->_logger->debug('This is called from communication.xml');
        return !$param;
    }

    /**
     * @param mixed
     * @return mixed
     */
    public function methodWithMixedParam($param)
    {
        return $param;
    }
}
