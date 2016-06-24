<?php

use Migrations\AbstractMigration;
use Cake\Core\Configure;

class NewCommonSettings extends AbstractMigration
{

    /**
     * Migrate Up.
     */
    public function up()
    {
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
