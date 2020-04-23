<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tuples}}`.
 */
class m200422_174413_create_tuples_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tuples}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50),
            'price' => $this->float(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tuples}}');
    }
}
