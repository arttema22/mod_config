<?php

use yii\db\Migration;

/**
 * Handles the creation of table `config`.
 */
class m170609_093409_create_config_table extends Migration {

    /**
     * @inheritdoc
     */
    public function safeUp() {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%config}}', [
            'id' => $this->primaryKey(),
            'param' => $this->string(128)->notNull(),
            'value' => $this->text()->notNull(),
            'default' => $this->text()->notNull(),
            'label' => $this->string(255)->notNull(),
            'type' => $this->string(128)->notNull(),
                ], $tableOptions);

        $this->createIndex('idx_config_param', '{{%config}}', 'param');
        
        $this->insert('{{%config}}', [
            'param' => 'MAIN_PAGE_TITLE',
            'value' => 'SiteName',
            'default' => 'SiteName',
            'label' => 'SEO Title main page',
            'type' => 'string',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown() {
        $this->dropTable('%config');
    }

}
