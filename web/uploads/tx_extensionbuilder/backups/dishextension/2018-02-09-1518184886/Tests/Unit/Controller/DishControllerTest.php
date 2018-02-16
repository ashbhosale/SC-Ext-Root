<?php
namespace DishExtension\Dishextension\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Aishwarya Bhosale <aishwarya.bhosale@hof-university.de>
 */
class DishControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \DishExtension\Dishextension\Controller\DishController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\DishExtension\Dishextension\Controller\DishController::class)
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
    public function listActionFetchesAllDishesFromRepositoryAndAssignsThemToView()
    {

        $allDishes = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $dishRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $dishRepository->expects(self::once())->method('findAll')->will(self::returnValue($allDishes));
        $this->inject($this->subject, 'dishRepository', $dishRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('dishes', $allDishes);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenDishToView()
    {
        $dish = new \DishExtension\Dishextension\Domain\Model\Dish();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('dish', $dish);

        $this->subject->showAction($dish);
    }
}
