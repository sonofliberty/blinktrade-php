<?php
/**
 * Copyright (c) 2016 Bitcoin Viet Nam Co., Ltd.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 * and associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to
 * do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 *  portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
 * ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
 * THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace BitcoinVietnam\Blinktrade\Request;
use BitcoinVietnam\Blinktrade\Request\CreateBitcoinWithdrawal\Data;

/**
 * Class Factory
 * @package BitcoinVietnam\Blinktrade\Request
 */
class Factory
{
    /**
     * @return CancelOrder
     */
    public function cancelOrder()
    {
        return new CancelOrder();
    }

    /**
     * @return CreateBitcoinDeposit
     */
    public function createBitcoinDeposit()
    {
        return new CreateBitcoinDeposit();
    }

    /**
     * @return CreateBitcoinWithdrawal
     */
    public function createBitcoinWithdrawal()
    {
        $request = new CreateBitcoinWithdrawal();
        $request->setData(new Data());

        return $request;
    }

    /**
     * @return CreateOrder
     */
    public function createOrder()
    {
        return new CreateOrder();
    }

    /**
     * @return GetBalance
     */
    public function getBalance()
    {
        return new GetBalance();
    }

    /**
     * @return GetOrders
     */
    public function getOrders()
    {
        return new GetOrders();
    }

    /**
     * @return GetWithdrawals
     */
    public function getWithdrawals()
    {
        return new GetWithdrawals();
    }
}