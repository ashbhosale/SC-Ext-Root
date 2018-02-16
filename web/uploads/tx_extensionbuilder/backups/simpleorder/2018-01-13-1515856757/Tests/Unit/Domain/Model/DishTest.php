<?php
namespace PingAndReceive\Simpleorder\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Aishwarya 
 */
class DishTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \PingAndReceive\Simpleorder\Domain\Model\Dish
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \PingAndReceive\Simpleorder\Domain\Model\Dish();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getDishnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDishname()
        );
    }

    /**
     * @test
     */
    public function setDishnameForStringSetsDishname()
    {
        $this->subject->setDishname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'dishname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDishdescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDishdescription()
        );
    }

    /**
     * @test
     */
    public function setDishdescriptionForStringSetsDishdescription()
    {
        $this->subject->setDishdescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'dishdescription',
            $this->subject
        );
    }
}
