<?php

class StoreTest extends PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider provideItems
     */
    public function testItDoesCalculation(int $numberOfDays, array $inputItems, array $outputItems): void
    {
        $store = new Store($inputItems);
        for($i = 0; $i < $numberOfDays; $i++) {
            $store->tick();
        }

        $this->assertEquals($outputItems, $inputItems);
    }

    public function provideItems(): Generator
    {
        yield [1, [new Item('Mana Cake', 10, 10)], [new Item('Mana Cake', 9, 9)]];

        yield [2, [new Item('Mana Cake', 10, 10)], [new Item('Mana Cake', 8, 8)]];
    }
}
