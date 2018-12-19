该插件可以在迁移文件中使用fulltext索引：
$table->fulltext(['name', 'content']);
参数为一个数组。

使用方法：
composer require ouyang/fulltext-for-laravel-migrate:dev-master
然后在迁移文件中使用下面两句代码：
use Ouyang\Concurrency\Schema;
use Ouyang\Concurrency\Blueprint;
替换掉：
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
