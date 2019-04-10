<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/10 5:55 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\FluentInterface\Tests;

use DesignPatterns\Structural\FluentInterface\Sql;
use PHPUnit\Framework\TestCase;

class FluentInterfaceTest extends TestCase
{
    public function testBuildSql()
    {
        $sql = (new Sql())
            ->select(['foo', 'bar'])
            ->from('foobar', 'fb')
            ->where('fb.bar = ?');
        $this->assertEquals(
            'SELECT foo, bar FROM foobar AS fb WHERE fb.bar = ?',
            (string)$sql
        );
    }
}