<?php namespace Kevupton\LaravelCoinpayments\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    /**
     * Defines the prefix for the table.
     * @param array $attr
     */

    public function __construct($attr = array()) {
        $this->table = cp_table_prefix() . self::getTable(); #Fix multiple prefix issue
        parent::__construct($attr);
    }
    
      /**
     * @return string
     */
    public function getTable()
    {
        $table = parent::getTable();

        // Check if the prefix is already added before adding it again
        if (strpos($table, cp_table_prefix()) === 0) {
            return $table;
        }

        return cp_table_prefix() . parent::getTable();
    }
}
