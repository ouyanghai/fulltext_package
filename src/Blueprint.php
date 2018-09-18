<?php
namespace Ouyang\Concurrency;

use Illuminate\Database\Schema\Blueprint as BaseBlueprint;

class Blueprint extends BaseBlueprint
{
  
    public function fulltext($columns, $name = null)
    {
        return $this->indexCommand('fulltext', $columns, $name);
    }

    public function dropFulltext($index)
    {
        return $this->dropIndexCommand('dropFulltext', 'fulltext', $index);
    }
}