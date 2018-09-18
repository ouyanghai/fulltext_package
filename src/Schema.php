<?php
namespace Ouyang\Concurrency;
use Illuminate\Support\Facades\Facade;
class Schema extends Facade
{
    protected static function getFacadeAccessor()
    {
        $connection = static::$app['db']->connection();
        $connection->setSchemaGrammar(new MySqlGrammar);
        $schema = $connection->getSchemaBuilder();
        $schema->blueprintResolver(function ($table, $callback) {
            return new Blueprint($table, $callback);
        });
        return $schema;
    }
}