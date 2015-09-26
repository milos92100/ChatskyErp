<?php
require $_SERVER['DOCUMENT_ROOT'] . 'conf/conf.php';

use PHPUnit_Framework_TestCase;

class UserRepositoryTest extends PHPUnit_Framework_TestCase
{

    /**
     * Tests the basic UserRepository methods
     */
    public function testCrud ()
    {
        $arr = array(
                "username" => "a",
                "password" => "a",
                "first_name" => "a",
                "middle_name" => "a",
                "last_name" => "a",
                "email" => "a",
                "phone" => "a",
                "mobile" => "a",
                "fax" => "a",
                "country" => "a",
                "city" => "a",
                "address" => "a",
                "zip" => "a"
        );
        
        $user = new User($arr);
        $user = UserRepository::getInstance()->add($user);
        
        // test if the insert was ok
        $this->assertGreaterThanOrEqual(1, $user->getId());
        
        $new_arr = array(
                "username" => UserTest::USERNAME,
                "password" => UserTest::PASSWORD,
                "first_name" => UserTest::FIRST_NAME,
                "middle_name" => UserTest::MIDDLE_NAME,
                "last_name" => UserTest::LAST_NAME,
                "email" => UserTest::EMAIL,
                "phone" => UserTest::PHONE,
                "mobile" => UserTest::MOBILE,
                "fax" => UserTest::FAX,
                "country" => UserTest::COUNTRY,
                "city" => UserTest::CITY,
                "address" => UserTest::ADDRESS,
                "zip" => UserTest::ZIP,
                "id" => $user->getId()
        );
        
        $new_user = new User($new_arr);
        UserRepository::getInstance()->update($new_user);
        $temp_user = UserRepository::getInstance()->getById($new_user->getId());
        
        // test if the update was ok
        $this->assertEquals(UserTest::USERNAME, $temp_user->getUsername());
        $this->assertEquals(UserTest::PASSWORD, $temp_user->getPassword());
        $this->assertEquals(UserTest::FIRST_NAME, $temp_user->getFirstName());
        $this->assertEquals(UserTest::MIDDLE_NAME, $temp_user->getMiddleName());
        $this->assertEquals(UserTest::LAST_NAME, $temp_user->getLastName());
        $this->assertEquals(UserTest::EMAIL, $temp_user->getEmail());
        $this->assertEquals(UserTest::PHONE, $temp_user->getPhone());
        $this->assertEquals(UserTest::MOBILE, $temp_user->getMobile());
        $this->assertEquals(UserTest::FAX, $temp_user->getFax());
        $this->assertEquals(UserTest::CITY, $temp_user->getCity());
        $this->assertEquals(UserTest::COUNTRY, $temp_user->getCountry());
        $this->assertEquals(UserTest::ADDRESS, $temp_user->getAddress());
        $this->assertEquals(UserTest::ZIP, $temp_user->getZip());
        
        UserRepository::getInstance()->remove($temp_user);
        
        $rem_user = UserRepository::getInstance()->getById($new_user->getId());
        
        // has to be null if the removing of the user was ok
        //$this->assertNull($rem_user);
    }
}