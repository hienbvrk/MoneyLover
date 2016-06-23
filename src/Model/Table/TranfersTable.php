<?php
namespace App\Model\Table;

use App\Model\Entity\Tranfer;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tranfers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $FromWallets
 * @property \Cake\ORM\Association\BelongsTo $ToWallets
 */
class TranfersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('tranfers');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('FromWallets', [
            'foreignKey' => 'from_wallet_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ToWallets', [
            'foreignKey' => 'to_wallet_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->dateTime('tranfer_date')
            ->requirePresence('tranfer_date', 'create')
            ->notEmpty('tranfer_date');

        $validator
            ->numeric('money')
            ->requirePresence('money', 'create')
            ->notEmpty('money');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['from_wallet_id'], 'FromWallets'));
        $rules->add($rules->existsIn(['to_wallet_id'], 'ToWallets'));
        return $rules;
    }
}
