<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $usuario_id
 * @property string $cpf
 * @property string $senha
 * @property string $nome_completo
 * @property string $sexo
 * @property int $roles_id
 * @property bool $status
 * @property \Cake\I18n\FrozenTime $dt_criacao
 * @property \Cake\I18n\FrozenTime $dt_modificacao
 *
 * @property \App\Model\Entity\Role $role
 */
class User extends Entity
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
        'cpf' => true,
        'senha' => true,
        'nome_completo' => true,
        'sexo' => true,
        'roles_id' => true,
        'status' => true,
        'dt_criacao' => true,
        'dt_modificacao' => true,
        'role' => true
    ];

    protected $_hidden = [
        'senha'  
      ];
  
      protected function _setSenha($senha){
          if(strlen($senha) > 0){
              return(new DefaultPasswordHasher)->hash($senha);
          }
      }
}
