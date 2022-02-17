<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class InitialDatabase extends AbstractMigration
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
        $table = $this->table('last_news', ['id' => 'id_news']);
        
        $table->addColumn('title', 'string', ['default' => '', 'limit' => 255])
              ->addColumn('author', 'string', ['default' => '', 'limit' => 150])
              ->addColumn('content', 'text', ['default' => '', 'limit' => 'TEXT_LONG'])
              ->addColumn('postcard', 'string', ['default' => '', 'limit' => 255])
              ->create();
              
        $data = [
            [
                'title' => 'Осенью 2020 года выходит ремейк первой Мафии. Что же это будет?',
                'author' => 'Станислав Сивинский',
                'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.',
                'postcard' => 'images/mafia.jpg'
            ],[
                'title' => 'Политолог Валерий Соловей вместе с сыном задержан в Москве',
                'author' => 'Станислав Сивинский',
                'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.',
                'postcard' => 'images/aizek.jpg'
            ],[
                'title' => 'Захарова заявила о планах Великобритании напасть на Россию',
                'author' => 'Станислав Сивинский',
                'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.',
                'postcard' => 'images/order.jpg'
            ],[
                'title' => 'Чешский политолог Крейчи заявил о попадании США в ловушку своей пропаганды из-за Украины',
                'author' => 'Станислав Сивинский',
                'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.',
                'postcard' => 'images/GhostofTsushima.jpg'
            ],[
                'title' => 'Зеленский утвердил Стратегию госбезопасности Украины',
                'author' => 'Станислав Сивинский',
                'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.',
                'postcard' => 'images/batman.jpg'
            ]
        ];

        $table->insert($data)
              ->saveData();
    }
}
