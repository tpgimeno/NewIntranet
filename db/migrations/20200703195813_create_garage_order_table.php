<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateGarageOrderTable extends AbstractMigration
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
        $table = $this->table('garage_orders');
        $table->addColumn('order_number', 'string')
                ->addColumn('date_in', 'date')
                ->addColumn('date_out', 'date')
                ->addColumn('vehicle_id', 'integer')
                ->addColumn('customer_id', 'integer')
                ->addColumn('km_in', 'integer')
                ->addColumn('km_out', 'integer')
                ->addColumn('works', 'string')
                ->addColumn('articles', 'string')
                ->addColumn('price_works', 'string')
                ->addColumn('price_articles', 'string')
                ->addColumn('observations', 'string')
                ->addColumn('text', 'string')
                ->addColumn('created_at', 'datetime')
                ->addColumn('updated_at', 'datetime')
                ->addColumn('deleted_at', 'datetime')
                ->create();
    }
}
