<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

use yii\db\Migration;

class m140704_080659_installationid extends Migration
{
    public function up()
    {
        if (\humhub\models\Setting::isInstalled()) {
            $this->insert('setting', [
                'name' => 'installationId',
                'value' => md5(uniqid("", true)),
                'module_id' => 'admin'
            ]);
        }
    }

    public function down()
    {
        echo "m140704_080659_installationid does not support migration down.\n";

        return false;
    }
}
