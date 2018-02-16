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
 * OrderController
 */
class OrderController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * orderRepository
     *
     * @var \PingAndReceive\Simpleorder\Domain\Repository\OrderRepository
     * @inject
     */
    protected $orderRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $orders = $this->orderRepository->findAll();
        $this->view->assign('orders', $orders);
    }

    /**
     * action show
     *
     * @param \PingAndReceive\Simpleorder\Domain\Model\Order $order
     * @return void
     */
    public function showAction(\PingAndReceive\Simpleorder\Domain\Model\Order $order)
    {
        $this->view->assign('order', $order);
    }
}
