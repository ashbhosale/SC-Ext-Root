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
 * Dish
 */
class Dish extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * dishname
     *
     * @var string
     * @validate NotEmpty
     */
    protected $dishname = '';

    /**
     * dishdescription
     *
     * @var string
     * @validate NotEmpty
     */
    protected $dishdescription = '';

    /**
     * Returns the dishname
     *
     * @return string $dishname
     */
    public function getDishname()
    {
        return $this->dishname;
    }

    /**
     * Sets the dishname
     *
     * @param string $dishname
     * @return void
     */
    public function setDishname($dishname)
    {
        $this->dishname = $dishname;
    }

    /**
     * Returns the dishdescription
     *
     * @return string $dishdescription
     */
    public function getDishdescription()
    {
        return $this->dishdescription;
    }

    /**
     * Sets the dishdescription
     *
     * @param string $dishdescription
     * @return void
     */
    public function setDishdescription($dishdescription)
    {
        $this->dishdescription = $dishdescription;
    }
}
