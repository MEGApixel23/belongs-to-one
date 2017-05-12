<?php

$factory->define(Models\Record::class, function (Faker\Generator $faker) {
    return [
        'name' => str_random(10),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});

$factory->define(Models\Group::class, function (Faker\Generator $faker) {
    return [
        'name' => str_random(10),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});

$factory->define(Models\GroupRecord::class, function () {
    $group = factory(Models\Group::class)->create();
    $record = factory(Models\Record::class)->create([
        'id' => $group->id + 3
    ]);

    return [
        'group_id' => $group->id,
        'record_id' => $record->id,
    ];
});