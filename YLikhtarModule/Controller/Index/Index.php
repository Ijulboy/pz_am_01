<?php

namespace Amasty\YLikhtarModule\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\ResultFactory;

class Index implements ActionInterface
{

    private $resultFactory;

    public function __construct (ResultFactory $resultFactory)
    {
        $this->resultFactory = $resultFactory;
    }
    public function execute()
    {
        // TODO: Implement execute() method.
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}