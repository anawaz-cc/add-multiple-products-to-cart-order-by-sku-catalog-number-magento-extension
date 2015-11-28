<?php
/**
 * Order By Catalog Number Extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to ali.nawaz@cooperativecomputing.com so we can send you a copy immediately.
 *
 * @category    Cooperative Computing
 * @package     CooperativeComputing_AddMultipleProducts
 * @author      Ali Nawaz <ali.nawaz@cooperativecomputing.com>
 * @copyright   Copyright 2015 Cooperative Computing (http://www.cooperativecomputing.com)
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

class CooperativeComputing_AddMultipleProducts_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	$this->loadLayout();
        $this->getLayout()->getBlock('head')->setTitle($this->__('Order By Catalog Number'));
        $this->renderLayout();
    }
}