<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class SqlQueryBinding extends Base {

	protected $table = 'tracker_sql_query_bindings';

	protected $fillable = array(
		'sql_query_bindings_id',
		'name',
		'value',
	);

}
