<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class ModifyTableLastNews extends AbstractMigration
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
        // Заполнение поля author
        $this->execute('UPDATE last_news SET author = 1');
        
        $table = $this->table('last_news');
        $table->changeColumn('author', 'integer', ['default' => 1])
              ->update();
        
        $table->renameColumn('author', 'id_author')
              ->update();
              
        $table->addForeignKey('id_author', 'authors', 'id', ['delete'=> 'RESTRICT', 'update'=> 'RESTRICT'])
              ->update();
    }
}
