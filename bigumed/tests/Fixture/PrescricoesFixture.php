<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PrescricoesFixture
 */
class PrescricoesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'precricao_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'periodicidade' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'quantidade' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'duracao' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'observacao' => ['type' => 'string', 'length' => 300, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'dt_prescricao' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'medico_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'paciente_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'medicamentos_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'med_pres_ibfk_1' => ['type' => 'index', 'columns' => ['medico_id'], 'length' => []],
            'pac_pres_ibfk_1' => ['type' => 'index', 'columns' => ['paciente_id'], 'length' => []],
            'medicamento_pres_ibfk_1' => ['type' => 'index', 'columns' => ['medicamentos_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['precricao_id'], 'length' => []],
            'med_pres_ibfk_1' => ['type' => 'foreign', 'columns' => ['medico_id'], 'references' => ['medicos', 'medico_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'medicamento_pres_ibfk_1' => ['type' => 'foreign', 'columns' => ['medicamentos_id'], 'references' => ['medicamentos', 'medicamentos_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'pac_pres_ibfk_1' => ['type' => 'foreign', 'columns' => ['paciente_id'], 'references' => ['pacientes', 'paciente_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'precricao_id' => 1,
                'periodicidade' => 'Lorem ipsum dolor sit amet',
                'quantidade' => 1,
                'duracao' => 'Lorem ipsum dolor sit amet',
                'observacao' => 'Lorem ipsum dolor sit amet',
                'dt_prescricao' => 1568351903,
                'medico_id' => 1,
                'paciente_id' => 1,
                'medicamentos_id' => 1
            ],
        ];
        parent::init();
    }
}
