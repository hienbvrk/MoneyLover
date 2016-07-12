<?php

use Migrations\AbstractMigration;
use Cake\Core\Configure;

/**
 * Description of 20160616091609_CreateTables
 *
 * @author HienBV <hienbv.it@gmail.com>
 */
class CreateTables extends AbstractMigration
{

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('categories');
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 64,
            'null' => false,
        ]);
        $table->addColumn('type', 'integer', [
            'default' => 1,
            'limit' => 1,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();

        $table = $this->table('common_settings');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 64,
            'null' => true,
        ]);
        $table->addColumn('key', 'string', [
            'default' => null,
            'limit' => 64,
            'null' => false,
        ]);
        $table->addColumn('value', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();

        $table = $this->table('tranfers');
        $table->addColumn('from_wallet_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('to_wallet_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('tranfer_date', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('money', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();

        $table = $this->table('transactions');
        $table->addColumn('wallet_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('category_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('description', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('transaction_date', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('money', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();

        $table = $this->table('users');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 32,
            'null' => false,
        ]);
        $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('password', 'string', [
            'default' => null,
            'limit' => 64,
            'null' => false,
        ]);
        $table->addColumn('role', 'integer', [
            'default' => 0,
            'limit' => 1,
            'null' => false,
        ]);
        $table->addColumn('status', 'integer', [
            'default' => 0,
            'limit' => 1,
            'null' => false,
        ]);
        $table->addColumn('avatar', 'string', [
            'default' => null,
            'limit' => 64,
            'null' => false,
        ]);
        $table->addColumn('token', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addIndex([
            'email',
                ], [
            'name' => 'EMAIL_INDEX',
            'unique' => true,
        ]);
        $table->create();

        $table = $this->table('wallets');
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 64,
            'null' => false,
        ]);
        $table->addColumn('description', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('money', 'float', [
            'default' => 0,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
        
        // inserting multiple rows
        $datetime = date('Y-m-d H:i:s');
        $rows = [
            [
                'id' => 1,
                'name' => 'List Default Categories',
                'key' => 'default_categories',
                'value' => json_encode([
                    Configure::read('Category.expenses') => [
                        'Eating',
                        'Shopping',
                        'Market',
                        'Loan',
                        'Donate'
                    ],
                    Configure::read('Category.income') => [
                        'Salary',
                        'Bonus',
                        'Borrow',
                        'Other',
                    ]
                ]),
                'created' => $datetime,
                'modified' => $datetime
            ],
            [
                'id' => 2,
                'name' => 'Default Name Wallet',
                'key' => 'default_name_wallet',
                'value' => 'My Wallet',
                'created' => $datetime,
                'modified' => $datetime
            ]
        ];

        $this->insert('common_settings', $rows);
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->execute('TRUNCATE common_settings');
    }

}
