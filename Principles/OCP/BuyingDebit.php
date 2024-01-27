<?php

namespace SOLID\OCP;

class BuyingDebit implements Buying
{

    public function buy()
    {
        return "Iam buying on debit";
    }
}