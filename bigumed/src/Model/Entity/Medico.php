<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Medico Entity
 *
 * @property int $medico_id
 * @property string $crm
 * @property string $especialidade
 * @property int $usuario_id
 *
 * @property \App\Model\Entity\User $user
 */
class Medico extends Entity
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
        'crm' => true,
        'especialidade' => true,
        'usuario_id' => true,
        'user' => true
    ];
}
