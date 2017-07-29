<?php

use yii\db\Migration;

class m170728_161227_add_index_news_content extends Migration
{

    public function up()
    {
        $this->execute("ALTER TABLE news ADD FULLTEXT INDEX idx_content (content)");
    }

    public function down()
    {
        $this->dropIndex('idx_content', 'news');
    }

}
