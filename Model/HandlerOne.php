<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Lokeshyourfriend\MsgQueueTopicSchema\Model;

/**
 * Class for testing queue handlers.
 */
class HandlerOne
{
    private \Psr\Log\LoggerInterface $_logger;
 
    public function __construct(
        \Psr\Log\LoggerInterface $logger
    )
    {        
        $this->_logger = $logger;
    }
    /**
     * Return true.
     *
     * @return bool
     */
    public function handlerMethodOne(bool $params = true)
    {
        $this->_logger->debug('Here Boolean values are here. value is ' . $params);
        return true;
    }

    /**
     * Return true.
     *
     * @return bool
     */
    public function handlerMethodTwo()
    {
        return true;
    }

    /**
     * Return true.
     *
     * @return bool
     */
    public function handlerMethodThree()
    {
        return true;
    }
}
