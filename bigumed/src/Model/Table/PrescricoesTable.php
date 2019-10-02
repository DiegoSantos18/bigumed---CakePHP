<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prescricoes Model
 *
 * @property \App\Model\Table\MedicosTable&\Cake\ORM\Association\BelongsTo $Medicos
 * @property \App\Model\Table\PacientesTable&\Cake\ORM\Association\BelongsTo $Pacientes
 * @property \App\Model\Table\MedicamentosTable&\Cake\ORM\Association\BelongsTo $Medicamentos
 *
 * @method \App\Model\Entity\Prescrico get($primaryKey, $options = [])
 * @method \App\Model\Entity\Prescrico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Prescrico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Prescrico|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prescrico saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prescrico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Prescrico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Prescrico findOrCreate($search, callable $callback = null, $options = [])
 */
class PrescricoesTable extends Table
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

        $this->setTable('prescricoes');
        $this->setDisplayField('precricao_id');
        $this->setPrimaryKey('precricao_id');

        $this->belongsTo('Medicos', [
            'foreignKey' => 'medico_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Pacientes', [
            'foreignKey' => 'paciente_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Medicamentos', [
            'foreignKey' => 'medicamento_id',
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
            ->integer('precricao_id')
            ->allowEmptyString('precricao_id', null, 'create');

        $validator
            ->scalar('periodicidade')
            ->maxLength('periodicidade', 100)
            ->allowEmptyString('periodicidade');

        $validator
            ->integer('quantidade')
            ->allowEmptyString('quantidade');

        $validator
            ->scalar('duracao')
            ->maxLength('duracao', 50)
            ->allowEmptyString('duracao');

        $validator
            ->scalar('observacao')
            ->maxLength('observacao', 300)
            ->allowEmptyString('observacao');

        $validator
            ->dateTime('dt_prescricao')
            ->notEmptyDateTime('dt_prescricao');

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
        $rules->add($rules->existsIn(['medico_id'], 'Medicos'));
        $rules->add($rules->existsIn(['paciente_id'], 'Pacientes'));
        $rules->add($rules->existsIn(['medicamento_id'], 'Medicamentos'));

        return $rules;
    }
}
