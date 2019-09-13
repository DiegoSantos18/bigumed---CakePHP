<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Medicamento Entity
 *
 * @property int $medicamentos_id
 * @property string|null $nome_popular
 * @property string $nome_tecnico
 * @property string|null $tipo
 * @property string $composicao
 * @property string $contra_indicacoes
 * @property string $indicacao
 * @property string $posologia
 *
 * @property \App\Model\Entity\Prescrico[] $prescricoes
 */
class Medicamento extends Entity
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
        'nome_popular' => true,
        'nome_tecnico' => true,
        'tipo' => true,
        'composicao' => true,
        'contra_indicacoes' => true,
        'indicacao' => true,
        'posologia' => true,
        'prescricoes' => true
    ];
}
