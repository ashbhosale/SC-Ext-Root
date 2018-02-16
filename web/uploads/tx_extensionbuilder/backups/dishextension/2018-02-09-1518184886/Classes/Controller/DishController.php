<?php
namespace DishExtension\Dishextension\Controller;

/***
 *
 * This file is part of the "DishExtension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Aishwarya Bhosale <aishwarya.bhosale@hof-university.de>, Hochschule Hof
 *
 ***/

/**
 * DishController
 */
class DishController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $dishes = $this->dishRepository->findAll();
        $this->view->assign('dishes', $dishes);
    }

    /**
     * action show
     *
     * @param \DishExtension\Dishextension\Domain\Model\Dish $dish
     * @return void
     */
    public function showAction(\DishExtension\Dishextension\Domain\Model\Dish $dish)
    {
        $this->view->assign('dish', $dish);
    }
}
