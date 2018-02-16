<?php
namespace PingAndReceive\Simpleorder\Controller;

/***
 *
 * This file is part of the "PingAndReceive" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Aishwarya
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
     * @param \PingAndReceive\Simpleorder\Domain\Model\Dish $dish
     * @return void
     */
    public function showAction(\PingAndReceive\Simpleorder\Domain\Model\Dish $dish)
    {
        $this->view->assign('dish', $dish);
    }
}
