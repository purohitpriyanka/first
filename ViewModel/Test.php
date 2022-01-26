<?php


namespace Basic\Module\ViewModel;

//use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Basic\Module\Model\ForTest;

class Test implements ArgumentInterface
{

    /**
     * @var ForTest
     */
    protected ForTest $ForTest;

    /**
     * Example constructor.
     *
     * @param ForTest $ForTest
     */
    public function __construct(ForTest $ForTest)
    {
        $this->ForTest = $ForTest;
    }

    public function getForTest(RequestInterface $request):?string
    {
       

        return $this->ForTest->getContent();

    }
}
