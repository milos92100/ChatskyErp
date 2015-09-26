<?php
use PHPUnit_Framework_TestCase;

/**
 *
 * User class test
 *
 * @author milos
 *        
 */
class UserTest extends PHPUnit_Framework_TestCase
{

    const USERNAME = "miloss";

    const PASSWORD = "1234";

    const FIRST_NAME = "Milos";

    const MIDDLE_NAME = "Milos";

    const LAST_NAME = "Stojanovic";

    const EMAIL = "milos92100@gmail.com";

    const PHONE = "012211893";

    const MOBILE = "0691424448";

    const FAX = "fax";

    const COUNTRY = "Serbia";

    const CITY = "Pozarevac";

    const ADDRESS = "Sumadijska 23";

    const ZIP = "12000";

    /**
     * This method tests the set methods
     */
    public function testSeters ()
    {
        
        // set values
        $user = new User(array());
        $user->setUsername(self::USERNAME);
        $user->setPassword(self::PASSWORD);
        $user->setFirstName(self::FIRST_NAME);
        $user->setMiddleName(self::MIDDLE_NAME);
        $user->setLastName(self::LAST_NAME);
        $user->setEmail(self::EMAIL);
        $user->setPhone(self::PHONE);
        $user->setMobile(self::MOBILE);
        $user->setFax(self::FAX);
        $user->setCity(self::CITY);
        $user->setCountry(self::COUNTRY);
        $user->setAddress(self::ADDRESS);
        $user->setZip(self::ZIP);
        
        // test values
        $this->assertEquals(self::USERNAME, $user->getUsername());
        $this->assertEquals(self::PASSWORD, $user->getPassword());
        $this->assertEquals(self::FIRST_NAME, $user->getFirstName());
        $this->assertEquals(self::MIDDLE_NAME, $user->getMiddleName());
        $this->assertEquals(self::LAST_NAME, $user->getLastName());
        $this->assertEquals(self::EMAIL, $user->getEmail());
        $this->assertEquals(self::PHONE, $user->getPhone());
        $this->assertEquals(self::MOBILE, $user->getMobile());
        $this->assertEquals(self::FAX, $user->getFax());
        $this->assertEquals(self::CITY, $user->getCity());
        $this->assertEquals(self::COUNTRY, $user->getCountry());
        $this->assertEquals(self::ADDRESS, $user->getAddress());
        $this->assertEquals(self::ZIP, $user->getZip());
    }

    /**
     * Tests the update method
     */
    public function testUserUpdate ()
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
        
        $new_arr = array(
                "username" => self::USERNAME,
                "password" => self::PASSWORD,
                "first_name" => self::FIRST_NAME,
                "middle_name" => self::MIDDLE_NAME,
                "last_name" => self::LAST_NAME,
                "email" => self::EMAIL,
                "phone" => self::PHONE,
                "mobile" => self::MOBILE,
                "fax" => self::FAX,
                "country" => self::COUNTRY,
                "city" => self::CITY,
                "address" => self::ADDRESS,
                "zip" => self::ZIP
        );
        
        $temp_user = new User($new_arr);
        
        $user->updateValues($temp_user);
        
        $this->assertEquals(self::USERNAME, $user->getUsername());
        $this->assertEquals(self::PASSWORD, $user->getPassword());
        $this->assertEquals(self::FIRST_NAME, $user->getFirstName());
        $this->assertEquals(self::MIDDLE_NAME, $user->getMiddleName());
        $this->assertEquals(self::LAST_NAME, $user->getLastName());
        $this->assertEquals(self::EMAIL, $user->getEmail());
        $this->assertEquals(self::PHONE, $user->getPhone());
        $this->assertEquals(self::MOBILE, $user->getMobile());
        $this->assertEquals(self::FAX, $user->getFax());
        $this->assertEquals(self::CITY, $user->getCity());
        $this->assertEquals(self::COUNTRY, $user->getCountry());
        $this->assertEquals(self::ADDRESS, $user->getAddress());
        $this->assertEquals(self::ZIP, $user->getZip());
    }
}