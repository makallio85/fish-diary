<?php
use Migrations\AbstractMigration;

class CreateCaughtFishPhotos extends AbstractMigration
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
        $table = $this->table('caught_fish_photos');
        $table->addColumn('photo', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('photo_dir', 'string', [
            'default' => null,
            'limit' => 255,
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
        $table->addIndex([
            'photo',
        ], [
            'name' => 'BY_PHOTO',
            'unique' => false,
        ]);
        $table->addIndex([
            'photo_dir',
        ], [
            'name' => 'BY_PHOTO_DIR',
            'unique' => false,
        ]);
        $table->addIndex([
            'created',
        ], [
            'name' => 'BY_CREATED',
            'unique' => false,
        ]);
        $table->addIndex([
            'modified',
        ], [
            'name' => 'BY_MODIFIED',
            'unique' => false,
        ]);
        $table->create();
    }
}
