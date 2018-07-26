<?php
/**
 * @copyright (c) 2018, sunny-daisy 
 * all rights reserved.
 *
 * Daisy\Video\Image phpunit test
 *
 * @author  yanmin1@staff.sina.com.cn
 * @cdate   Wed Jul 25 16:03:02 CST 2018
 * 
 * Note: use command below to execute tests
 * vendor/bin/phpunit  --verbose tests/ImageTest.php
 */

class ImageNameTest extends PHPUnit\Framework\TestCase
{
    public function testGetImageNameById()
    {   
        $image = new Daisy\Video\ImageName();
        $name = $image->getImageNameById(258491975, 'original', 'jpg');
        $this->assertEquals('258/491/975/258491975.jpg', $name);
        $name = $image->getImageNameById(258491975, 'large', 'jpg');
        $this->assertEquals('258/491/975/258491975_1.jpg', $name);
        $name = $image->getImageNameById(258491975, 'medium', 'jpg');
        $this->assertEquals('258/491/975/258491975_2.jpg', $name);
        $name = $image->getImageNameById(258491975, 'small', 'jpg');
        $this->assertEquals('258/491/975/258491975_3.jpg', $name);
        $name = $image->getImageNameById(258491975, '400_300', 'jpg');
        $this->assertEquals('258/491/975/258491975_400_300.jpg', $name);
        $name = $image->getImageNameById('258491975', '400_300', 'jpg');
        $this->assertEquals('258/491/975/258491975_400_300.jpg', $name);
        $name = $image->getImageNameById('258491975', '432_243', 'jpg');
        $this->assertEquals('258/491/975/258491975_432_243.jpg', $name);
        $name = $image->getImageNameById('258491975', '220_124', 'jpg');
        $this->assertEquals('258/491/975/258491975_220_124.jpg', $name);
        $name = $image->getImageNameById('258491975', '180_101', 'jpg');
        $this->assertEquals('258/491/975/258491975_180_101.jpg', $name);
        $name = $image->getImageNameById('258491975', '160_90', 'jpg');
        $this->assertEquals('258/491/975/258491975_160_90.jpg', $name);
        $name = $image->getImageNameById('258491975', '128_72', 'jpg');
        $this->assertEquals('258/491/975/258491975_128_72.jpg', $name);
    }   

}
