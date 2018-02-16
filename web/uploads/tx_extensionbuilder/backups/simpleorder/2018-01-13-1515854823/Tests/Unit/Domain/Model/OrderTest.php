<?php
namespace PingAndReceive\Simpleorder\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Aishwarya 
 */
class OrderTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \PingAndReceive\Simpleorder\Domain\Model\Order
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \PingAndReceive\Simpleorder\Domain\Model\Order();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getOrderidReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getOrderid()
        );
    }

    /**
     * @test
     */
    public function setOrderidForIntSetsOrderid()
    {
        $this->subject->setOrderid(12);

        self::assertAttributeEquals(
            12,
            'orderid',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrdertypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOrdertype()
        );
    }

    /**
     * @test
     */
    public function setOrdertypeForStringSetsOrdertype()
    {
        $this->subject->setOrdertype('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'ordertype',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDishesReturnsInitialValueForDish()
    {
        self::assertEquals(
            null,
            $this->subject->getDishes()
        );
    }

    /**
     * @test
     */
    public function setDishesForDishSetsDishes()
    {
        $dishesFixture = new \PingAndReceive\Simpleorder\Domain\Model\Dish();
        $this->subject->setDishes($dishesFixture);

        self::assertAttributeEquals(
            $dishesFixture,
            'dishes',
            $this->subject
        );
    }
}
