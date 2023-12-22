<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class createOrUpdateTest extends TestCase
{
    public function test_create_or_update(): void
    {
        $request['role'] = "admin";
        $request['name'] = "test";
        $request['company_id'] = 1;
        $request['department_id'] = 1;
        $request['email'] = "";
        $request['dob_or_orgid'] = "";
        $request['phone'] = "1234567";
        $request['mobile'] = "1234567";
        $request['password'] = "1234567";
        $request['consumer_type'] = "";
        $request['additional_info'] = "";
        $request['consumer_type'] = "1";
        $request['username'] = "test";
        $request['post_code'] = "16916";
        $request['address'] = "address";
        $request['city'] = "Jakarta";
        $request['town'] = "Jakarta";;
        $request['country'] = "ID";
        $request['reference']  = "";
        $request['additional_info'] = "";
        $request['cost_place'] = "";
        $request['fee'] = "";
        $request['time_to_charge'] = "";
        $request['time_to_pay'] = "";
        $request['charge_ob'] = "";
        $request['customer_id'] = "1";
        $request['charge_km'] = "1";
        $request['maximum_km'] = "3";
        $this->userRepository->createOrUpdate(null, $request);
        $this->assertTrue(true);
    }
}