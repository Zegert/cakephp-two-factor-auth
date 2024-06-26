<?php
namespace TwoFactorAuth\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Class UserFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * fields property
     *
     * @var array
     */
    public $fields = [
        'id' => ['type' => 'integer'],
        'username' => ['type' => 'string', 'null' => true],
        'password' => ['type' => 'string', 'null' => true],
        'secret' => ['type' => 'string', 'null' => true],
        'created' => ['type' => 'timestamp', 'null' => true],
        'updated' => ['type' => 'timestamp', 'null' => true],
        '_constraints' => ['primary' => ['type' => 'primary', 'columns' => ['id']]],
    ];

    /**
     * records property
     *
     * @var array
     */
    public array $records = [
        ['username' => 'mariano', 'password' => '$2a$10$u05j8FjsvLBNdfhBhc21LOuVMpzpabVXQ9OpC2wO3pSO0q6t7HHMO', 'secret' => null, 'created' => '2007-03-17 01:16:23', 'updated' => '2007-03-17 01:18:31'],
        ['username' => 'nate', 'password' => '$2a$10$u05j8FjsvLBNdfhBhc21LOuVMpzpabVXQ9OpC2wO3pSO0q6t7HHMO', 'secret' => 'FDJBDYSSZMLJBOUG', 'created' => '2008-03-17 01:18:23', 'updated' => '2008-03-17 01:20:31'],
        ['username' => 'larry', 'password' => '$2a$10$u05j8FjsvLBNdfhBhc21LOuVMpzpabVXQ9OpC2wO3pSO0q6t7HHMO', 'secret' => null, 'created' => '2010-05-10 01:20:23', 'updated' => '2010-05-10 01:22:31'],
        ['username' => 'garrett', 'password' => '$2a$10$u05j8FjsvLBNdfhBhc21LOuVMpzpabVXQ9OpC2wO3pSO0q6t7HHMO', 'secret' => null, 'created' => '2012-06-10 01:22:23', 'updated' => '2012-06-12 01:24:31'],
    ];
}
