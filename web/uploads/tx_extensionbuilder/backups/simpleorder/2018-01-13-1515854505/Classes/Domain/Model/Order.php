<?php
namespace PingAndReceive\Simpleorder\Domain\Model;

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
 * Order
 */
class Order extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * orderid
     *
     * @var int
     */
    protected $orderid = 0;

    /**
     * ordertype
     *
     * @var string
     */
    protected $ordertype = '';

    /**
     * dishes
     *
     * @var \PingAndReceive\Simpleorder\Domain\Model\Dish
     */
    protected $dishes = null;

    /**
     * Returns the orderid
     *
     * @return int $orderid
     */
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * Sets the orderid
     *
     * @param int $orderid
     * @return void
     */
    public function setOrderid($orderid)
    {
        $this->orderid = $orderid;
    }

    /**
     * Returns the ordertype
     *
     * @return string $ordertype
     */
    public function getOrdertype()
    {
        return $this->ordertype;
    }

    /**
     * Sets the ordertype
     *
     * @param string $ordertype
     * @return void
     */
    public function setOrdertype($ordertype)
    {
        $this->ordertype = $ordertype;
    }

    /**
     * Returns the dishes
     *
     * @return \PingAndReceive\Simpleorder\Domain\Model\Dish $dishes
     */
    public function getDishes()
    {
        return $this->dishes;
    }

    /**
     * Sets the dishes
     *
     * @param \PingAndReceive\Simpleorder\Domain\Model\Dish $dishes
     * @return void
     */
    public function setDishes(\PingAndReceive\Simpleorder\Domain\Model\Dish $dishes)
    {
        $this->dishes = $dishes;
    }
}
