<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\ResponseInterface;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Request\Http;
use Magento\Framework\Event\ManagerInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Catalog\Model\ProductFactory;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use SimplifiedMagento\FirstModule\Model\HeavyService;
use SimplifiedMagento\FirstModule\Model\PencilFactory;

class HelloWorld extends Action
{
    protected $pencil_interface;
    protected $productRepository;
    protected $pencilFactory;
    protected $productFactory;
    protected $_eventManager;
    protected $http;
    protected $heavyService;

    /**
     * Class constructor.
     */
    public function __construct(
        Context $context,
        ManagerInterface $_eventManager,
        Http $http,
        HeavyService $heavyService
        // PencilInterface $pencil_interface,
        // PencilFactory $pencilFactory,
        // ProductRepositoryInterface $productRepository,
        // ProductFactory $productFactory
    )
    {
        // $this->pencil_interface = $pencil_interface;
        // $this->productRepository = $productRepository;
        // $this->pencilFactory = $pencilFactory;
        // $this->productFactory = $productFactory;
        $this->_eventManager = $_eventManager;
        $this->http = $http;
        $this->heavyService = $heavyService;
        parent::__construct($context);
    }

    public function execute()
    {
        // echo $this->pencil_interface->getPenciltype();
        // echo get_class($this->productRepository);
        // $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        // $pencil = $objectManager->create('SimplifiedMagento\FirstModule\Model\Pencil');
        // var_dump($pencil);

        // $book = $objectManager->create('SimplifiedMagento\FirstModule\Model\Book');
        // var_dump($book);

        // $student = $objectManager->create('SimplifiedMagento\FirstModule\Model\Student');
        // var_dump($student);
        
        // $pencil = $this->pencilFactory->create(['name'=>'AhmadSaeed', 'school'=>'Primary School']);
        // var_dump($pencil);

        // $product = $this->productFactory->create()->load(1);
        // $product->setName('Iphone 6');
        // $product_name = $product->getName();
        // $product_name = $product->getIdBySku('24-MB01');
        // echo $product_name;
        
        // $message = new \Magento\Framework\DataObject(['greeting'=>'Good Morning']);
        // echo 'Before Event The Message is: ' . $message->getGreeting() . '<br>';
        // $this->_eventManager->dispatch('custom_event', ['greeting'=>$message]);
        // echo 'After Dispatching The Message became: ' . $message->getGreeting() . '<br>';
        $id = $this->http->getParam('id', 0);
        if($id == 1) {
            $this->heavyService->printMessage();
        } else {
            echo 'Heavy Service Not Used' . '<br>';
        }
    }
}