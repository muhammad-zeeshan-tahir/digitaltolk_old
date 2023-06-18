<?php

namespace UnitTest;

use DTApi\Helpers\TeHelper;
use DTApi\Repository\UserRepository;
use PHPUnit\Framework\TestCase;

final class UnitTest extends TestCase
{
    // Tests will go here

    public function test_will_Expire_at_function()
    {
        $user = TeHelper::willExpireAt('2024-01-15 05:10:00','2024-01-10 05:10:00');
        $this->assertTrue(
            validateDate($user, $format = 'Y-m-d H:i:s'),
            'Assertion will be passed if function return correct format'
        );

    }

    public function test_createorupdate_function()
    {


        $test1 = UserRepository::createOrUpdate(50, []);
        $test2 = UserRepository::createOrUpdate(50, []);
        $this->assertSame($test1, $test2);

    }

    function validateDate($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        // The Y ( 4 digits year ) returns TRUE for any integer
        // with any number of digits so changing the comparison from == to === fixes the issue.
        return $d && $d->format($format) === $date;
    }


}