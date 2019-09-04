<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $usuario_id
 * @property string|null $cpf
 * @property string|null $senha
 * @property string|null $nome_completo
 * @property \Cake\I18n\FrozenTime|null $dt_criacao
 * @property \Cake\I18n\FrozenTime|null $dt_modificacao
 */
class Usuario extends Entity
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


    // Gera conjunto de todos os campos exceto o com a chave primária.
    protected $_accessible = [
        '*' => true,
        'usuario_id' => false
    ];

    // ...

    protected function _setPassword($senha)
    {
        if (strlen($senha) > 0) {
            return (new DefaultPasswordHasher)->hash($senha);
        }
    }

}
