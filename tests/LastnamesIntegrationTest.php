<?php
declare(strict_types=1);

namespace Bairwell\Faker\EnGbOns\Tests;

use Bairwell\Faker\EnGbOns\Lastnames;
use Faker\Generator;
use PHPUnit\Framework\TestCase;

/**
 * @coversNothing
 */
class LastnamesIntegrationTest extends TestCase
{

    /**
     * @testWith [2,"Fry"]
     * [4,"Heeson"]
     * [6,"Skeen"]
     * [8,"Conde"]
     * [10,"Walkden"]
     * [15,"Lucy"]
     * [25,"Shen"]
     * [35,"Hills"]
     * [55,"Green"]
     * [105,"Walker"]
     * [205,"Lorton"]
     * [305,"Davis"]
     * [505,"Pagan"]
     */
    public function testIntegration(int $seed,string $expectedSurname) : void {
        $faker=new Generator();
        $faker->addProvider(new Lastnames($faker));
        $faker->seed($seed);
        $this->assertSame($expectedSurname,$faker->lastName);

    }
}