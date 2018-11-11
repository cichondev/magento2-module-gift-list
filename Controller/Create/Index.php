<?php
/**
 * GiftList
 *
 * Gift List Extension for Magento 2.
 *
 * @package UnknownDevs\GiftList
 * @author Edilson Cichon <edilsoncichon@hotmail.com>
 * @author Paulo Araújo <pauloaraujos@gmail.com>
 * @copyright Copyright (c) 2018 UnknownDevs (https://unknowndevs.com.br/)
 * @license https://opensource.org/licenses/OSL-3.0.php Open Software License 3.0
 */
namespace UnknownDevs\GiftList\Controller\Create;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * GiftList create page
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}
