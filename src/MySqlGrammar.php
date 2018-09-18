<?php
namespace Ouyang\Concurrency;
use Illuminate\Support\Fluent;
use Illuminate\Database\Schema\Grammars\MySqlGrammar as BaseMySqlGrammar;
class MySqlGrammar extends BaseMySqlGrammar
{
    
    public function compileFulltext(Blueprint $blueprint, Fluent $command)
    {
        return $this->compileKey($blueprint, $command, 'fulltext');
    }
    
    public function compileDropFulltext(Blueprint $blueprint, Fluent $command)
    {
        $table = $this->wrapTable($blueprint);
        $index = $this->wrap($command->index);
        return "alter table {$table} drop index {$index}";
    }
}