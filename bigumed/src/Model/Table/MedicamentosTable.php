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
        $this->setDisplayField('medicamentos_id');
        $this->setPrimaryKey('medicamentos_id');
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
            ->nonNegativeInteger('medicamentos_id')
            ->allowEmptyString('medicamentos_id', null, 'create');

        $validator
            ->scalar('nome_popular')
            ->maxLength('nome_popular', 50)
            ->allowEmptyString('nome_popular');

        $validator
            ->scalar('nome_tecnico')
            ->maxLength('nome_tecnico', 50)
            ->requirePresence('nome_tecnico', 'create')
            ->notEmptyString('nome_tecnico');

        $validator
            ->scalar('tipo')
            ->allowEmptyString('tipo');

        $validator
            ->scalar('composicao')
            ->requirePresence('composicao', 'create')
            ->notEmptyString('composicao');

        $validator
            ->scalar('interacoes')
            ->allowEmptyString('interacoes');

        $validator
            ->scalar('contra_indicacoes')
            ->requirePresence('contra_indicacoes', 'create')
            ->notEmptyString('contra_indicacoes');

        $validator
            ->scalar('indicacao')
            ->requirePresence('indicacao', 'create')
            ->notEmptyString('indicacao');

        $validator
            ->scalar('posologia')
            ->requirePresence('posologia', 'create')
            ->notEmptyString('posologia');

        return $validator;
    }
}
