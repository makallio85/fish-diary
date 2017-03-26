<?php
use Migrations\AbstractMigration;

class RemovePhotoDirFromCaughtFishPhotos extends AbstractMigration
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
        $table->removeColumn('photo_dir');
        $table->update();
    }
}
