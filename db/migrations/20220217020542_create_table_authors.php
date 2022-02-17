<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTableAuthors extends AbstractMigration
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
        $table = $this->table('authors');
        
        $table->addColumn('fio', 'string', ['default' => '', 'limit' => 150])
              ->addColumn('age', 'integer', ['default' => 0])
              ->addColumn('location', 'string', ['default' => '', 'limit' => 255])
              ->addColumn('additional', 'text', ['default' => ''])
              ->create();
              
         $data = [
            [
                'fio' => 'Сивинский Станислав Адреевич',
                'age' => 28,
                'location' => 'Санкт-Петербург',
                'additional' => 'Преподаватель, Университет ИТМО'
            ]
        ];

        $table->insert($data)
              ->saveData();
    }
}
