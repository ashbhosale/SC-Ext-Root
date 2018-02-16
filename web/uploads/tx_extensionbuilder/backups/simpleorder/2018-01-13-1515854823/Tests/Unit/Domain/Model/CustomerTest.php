<?php
namespace PingAndReceive\Simpleorder\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Aishwarya 
 */
class CustomerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \PingAndReceive\Simpleorder\Domain\Model\Customer
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \PingAndReceive\Simpleorder\Domain\Model\Customer();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForStringSetsAddress()
    {
        $this->subject->setAddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'address',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrdersReturnsInitialValueForOrder()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOrders()
        );
    }

    /**
     * @test
     */
    public function setOrdersForObjectStorageContainingOrderSetsOrders()
    {
        $order = new \PingAndReceive\Simpleorder\Domain\Model\Order();
        $objectStorageHoldingExactlyOneOrders = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOrders->attach($order);
        $this->subject->setOrders($objectStorageHoldingExactlyOneOrders);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOrders,
            'orders',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addOrderToObjectStorageHoldingOrders()
    {
        $order = new \PingAndReceive\Simpleorder\Domain\Model\Order();
        $ordersObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ordersObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($order));
        $this->inject($this->subject, 'orders', $ordersObjectStorageMock);

        $this->subject->addOrder($order);
    }

    /**
     * @test
     */
    public function removeOrderFromObjectStorageHoldingOrders()
    {
        $order = new \PingAndReceive\Simpleorder\Domain\Model\Order();
        $ordersObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ordersObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($order));
        $this->inject($this->subject, 'orders', $ordersObjectStorageMock);

        $this->subject->removeOrder($order);
    }
}
