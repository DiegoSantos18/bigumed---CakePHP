<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Prescrico Entity
 *
 * @property int $precricao_id
 * @property string|null $periodicidade
 * @property int|null $quantidade
 * @property string|null $duracao
 * @property string|null $observacao
 * @property \Cake\I18n\FrozenTime $dt_prescricao
 * @property int $medico_id
 * @property int $paciente_id
 * @property int $medicamento_id
 *
 * @property \App\Model\Entity\Medico $medico
 * @property \App\Model\Entity\Paciente $paciente
 * @property \App\Model\Entity\Medicamento $medicamento
 */
class Prescrico extends Entity
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
        'periodicidade' => true,
        'quantidade' => true,
        'duracao' => true,
        'observacao' => true,
        'dt_prescricao' => true,
        'medico_id' => true,
        'paciente_id' => true,
        'medicamento_id' => true,
        'medico' => true,
        'paciente' => true,
        'medicamento' => true
    ];
}
