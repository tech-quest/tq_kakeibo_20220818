<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSpendingsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table('spendings');
        $table
            ->addColumn('name', 'string', ['limit' => 255])
            ->addColumn('user_id', 'integer')
            ->addColumn('category_id', 'integer')
            ->addColumn('amount', 'integer')
            ->addColumn('accrual_date', 'date')
            ->addColumn('created_at', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
            ])
            ->addColumn('updated_at', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'update' => 'CURRENT_TIMESTAMP',
            ])
            ->create();
    }
}