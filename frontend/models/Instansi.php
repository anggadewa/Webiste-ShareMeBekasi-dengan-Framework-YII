<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "instansi".
 *
 * @property int $id_saran
 * @property string $username
 * @property string $nama
 * @property string $saran
 * @property string $target
 * @property string $waktu
 */
class Instansi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'instansi';
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
            'saran' => 'Keluhan',
            'target' => 'Target',
            'waktu' => 'Waktu',
        ];
    }
}
