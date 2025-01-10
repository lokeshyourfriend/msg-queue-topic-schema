<?php

namespace Lokeshyourfriend\MsgQueueTopicSchema\Observer;

use Magento\Framework\Event\ObserverInterface;

class Productsaveafter implements ObserverInterface {

    const TOPIC_NAME = 'lokeshyourfriend.sync.type.bool.topic';

    private \Magento\Framework\MessageQueue\PublisherInterface $publisher;
    
    private \Lokeshyourfriend\MsgQueueTopicSchema\Model\SyncHandlerFactory $syncHandlerFactory;

    public function __construct(
            \Magento\Framework\MessageQueue\PublisherInterface $publisher,
            \Lokeshyourfriend\MsgQueueTopicSchema\Model\SyncHandlerFactory $syncHandlerFactory
            ) {
        $this->publisher = $publisher;
        $this->syncHandlerFactory = $syncHandlerFactory;
    }

    public function execute(\Magento\Framework\Event\Observer $observer) {
        //$_product = $observer->getProduct();  // you will get product object
        //$_sku = $_product->getSku(); // for sku
        //$syncHandler = $this->syncHandlerFactory->create();
        $this->publisher->publish(self::TOPIC_NAME, false);
    }
}
