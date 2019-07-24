<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sarana".
 *
 * @property int $id_saran
 * @property string $username
 * @property string $nama
 * @property string $saran
 * @property string $target
 * @property string $waktu
 */
class Sarana extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sarana';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'nama', 'saran', 'target'], 'required'],
            [['saran', 'target'], 'string'],
            [['waktu'], 'safe'],
            [['username'], 'string', 'max' => 35],
            [['nama'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_saran' => 'Id Saran',
            'username' => 'Username',
            'nama' => 'Nama',
            'saran' => 'Saran',
            'target' => 'Target',
            'waktu' => 'Waktu',
        ];
    }
}
