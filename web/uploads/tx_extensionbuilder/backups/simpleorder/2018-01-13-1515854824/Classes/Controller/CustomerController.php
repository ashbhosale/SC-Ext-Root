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
 * CustomerController
 */
class CustomerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * customerRepository
     *
     * @var \PingAndReceive\Simpleorder\Domain\Repository\CustomerRepository
     * @inject
     */
    protected $customerRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $customers = $this->customerRepository->findAll();
        $this->view->assign('customers', $customers);
    }
}
