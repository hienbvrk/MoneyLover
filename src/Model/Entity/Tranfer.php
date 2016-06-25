<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tranfer Entity.
 *
 * @property int $id
 * @property int $from_wallet_id
 * @property \App\Model\Entity\FromWallet $from_wallet
 * @property int $to_wallet_id
 * @property \App\Model\Entity\ToWallet $to_wallet
 * @property \Cake\I18n\Time $tranfer_date
 * @property float $money
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Tranfer extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
