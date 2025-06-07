<?php

use Editmode\WeightConversions\Weight;

it('can convert kilograms to pounds', function () {
    $pounds = Weight::kilograms(100)->toPounds();
    expect($pounds)->toBe(220.46);
});

it('can convert kilograms to stones', function () {
    $pounds = Weight::kilograms(100)->toStones();
    expect($pounds)->toBe(15.747);
});
