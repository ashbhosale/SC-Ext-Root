<?php
namespace DishExtension\Dishextension\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Aishwarya Bhosale <aishwarya.bhosale@hof-university.de>
 */
class DishTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \DishExtension\Dishextension\Domain\Model\Dish
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \DishExtension\Dishextension\Domain\Model\Dish();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getId()
        );
    }

    /**
     * @test
     */
    public function setIdForIntSetsId()
    {
        $this->subject->setId(12);

        self::assertAttributeEquals(
            12,
            'id',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPriceReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPrice()
        );
    }

    /**
     * @test
     */
    public function setPriceForIntSetsPrice()
    {
        $this->subject->setPrice(12);

        self::assertAttributeEquals(
            12,
            'price',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getType()
        );
    }

    /**
     * @test
     */
    public function setTypeForStringSetsType()
    {
        $this->subject->setType('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'type',
            $this->subject
        );
    }
}
