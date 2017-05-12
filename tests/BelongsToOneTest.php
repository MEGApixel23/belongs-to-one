<?php

use Models\Record;
use Models\GroupRecord;

class BelongsToOneTest extends TestCase
{
    protected $group;
    protected $records;

    protected function init()
    {
        parent::init();

        factory(GroupRecord::class, 10)->create();
    }

    /** @test */
    public function should_return_one_related_model()
    {
        /**
         * @var Record $record
         * @var GroupRecord $relation
         */
        $record = Record::with('group')->first();
        $relation = GroupRecord::where('record_id', $record->id)->first();

        $this->assertEquals(
            $record->group->id,
            $relation->group_id,
            'returns right related model'
        );
    }

    /** @test */
    public function should_return_right_related_model()
    {
        /**
         * @var Record $record
         */
        $record = Record::with('group')->first();

        $this->instance(
            \Models\Group::class,
            $record->group,
            'related model is type o'
        );
    }
}