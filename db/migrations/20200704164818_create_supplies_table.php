<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSuppliesTable extends AbstractMigration
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
        $table = $this->table('supplies');
        $table->addColumn('name', 'string')
                ->addColumn('ref', 'string')
                ->addColumn('mader', 'integer')
                ->addColumn('mader_code', 'string')
                ->addColumn('pvc', 'float')
                ->addColumn('pvp', 'float')
                ->addColumn('observations', 'string')
                 ->addColumn('stock', 'integer')
                ->addColumn('created_at', 'datetime')
                ->addColumn('updated_at', 'datetime')
                ->addColumn('deleted_at', 'datetime')
                ->create();
    }
}
