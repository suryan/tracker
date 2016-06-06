<?php

use PragmaRX\Tracker\Support\Migration;

class AddTrackerRefererColumnToLog extends Migration
{
    /**
     * Table related to this migration.
     *
     * @var string
     */

    private $table = 'tracker_sql_query_bindings';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function migrateUp()
    {
        $this->builder->table(
            $this->table,
            function ($table)
            {
                $table->integer('sql_query_id')->unsigned()->nullable()->index();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function migrateDown()
    {
        $this->builder->table(
            $this->table,
            function ($table)
            {
                $table->dropColumn('sql_query_id');
            }
        );
    }
}
