<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paciente Entity
 *
 * @property int $paciente_id
 * @property string $rg
 * @property string $numero_convenio
 * @property int $usuario_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Prescrico[] $prescricoes
 */
class Paciente extends Entity
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
        'rg' => true,
        'numero_convenio' => true,
        'usuario_id' => true,
        'user' => true,
        'prescricoes' => true
    ];
}
