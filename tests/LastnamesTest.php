<?php
declare(strict_types=1);

namespace Bairwell\Faker\EnGbOns\Lastnames\Tests;
use Bairwell\Faker\EnGbOns\Lastnames\Lastnames;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Bairwell\Faker\EnGbOns\Lastnames\Lastnames
 */
class LastnamesTest extends TestCase
{

    /**
     * @covers ::lastName
     * @testWith [1,"Morris","Nicholl","Smith"]
     * [2,"Durrant","Everett","Vara"]
     * [3,"Sugars","Edwards","Triggs"]
     * [10,"Tanner","Jones","Armstrong"]
     * [100,"Montgomery","McCord","Eggleton"]
     * [200,"Gingell","Lumb","Thomas"]
     * [300,"Newman","David","Moon"]
     * [1000,"Whitehead","Marques","Pugh"]
     * [10000,"Morley","Compton","Shuttleworth"]
     * [20000,"Morgan","Carder","Chinchen"]
     * [50000,"Reed","Morpeth","Northam"]
     * [100000,"Muttitt","Hope","McLoughlin"]
     */
    public function testLastName(int $seed, string $firstExpectedName, string $secondExpectedName, string $thirdExpectedName): void
    {
        mt_srand($seed, MT_RAND_MT19937);
        $this->assertSame($firstExpectedName, Lastnames::lastName(), 'First expected name from seed ' . $seed);
        $this->assertSame($secondExpectedName,Lastnames::lastName(), 'Second expected name from seed ' . $seed);
        $this->assertSame($thirdExpectedName, Lastnames::lastName(), 'Third expected name from seed ' . $seed);
    }
}
