<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Medicamentos Model
 *
 * @method \App\Model\Entity\Medicamento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Medicamento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Medicamento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Medicamento|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Medicamento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Medicamento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Medicamento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Medicamento findOrCreate($search, callable $callback = null, $options = [])
 */
class MedicamentosTable extends Table
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

        $this->setTable('medicamentos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nomepopular')
            ->maxLength('nomepopular', 50)
            ->allowEmptyString('nomepopular');

        $validator
            ->scalar('nometecnico')
            ->maxLength('nometecnico', 50)
            ->allowEmptyString('nometecnico');

        $validator
            ->scalar('tipo')
            ->allowEmptyString('tipo');

        $validator
            ->scalar('composicao')
            ->allowEmptyString('composicao');

        $validator
            ->scalar('contraindicacoes')
            ->allowEmptyString('contraindicacoes');

        $validator
            ->scalar('indicacao')
            ->allowEmptyString('indicacao');

        $validator
            ->scalar('posologia')
            ->allowEmptyString('posologia');

        return $validator;
    }
}
