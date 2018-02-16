<?php
namespace PingAndReceive\Simpleorder\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Aishwarya 
 */
class CustomerControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \PingAndReceive\Simpleorder\Controller\CustomerController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\PingAndReceive\Simpleorder\Controller\CustomerController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllCustomersFromRepositoryAndAssignsThemToView()
    {

        $allCustomers = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $customerRepository = $this->getMockBuilder(\PingAndReceive\Simpleorder\Domain\Repository\CustomerRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $customerRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCustomers));
        $this->inject($this->subject, 'customerRepository', $customerRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('customers', $allCustomers);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
