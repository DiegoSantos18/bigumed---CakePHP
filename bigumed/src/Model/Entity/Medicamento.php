<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Medicamento Entity
 *
 * @property int $id
 * @property string|null $nomepopular
 * @property string|null $nometecnico
 * @property string|null $tipo
 * @property string|null $composicao
 * @property string|null $contraindicacoes
 * @property string|null $indicacao
 * @property string|null $posologia
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
        'nomepopular' => true,
        'nometecnico' => true,
        'tipo' => true,
        'composicao' => true,
        'contraindicacoes' => true,
        'indicacao' => true,
        'posologia' => true
    ];
}
