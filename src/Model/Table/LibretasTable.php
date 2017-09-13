<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Libretas Model
 *
 * @method \App\Model\Entity\Libreta get($primaryKey, $options = [])
 * @method \App\Model\Entity\Libreta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Libreta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Libreta|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Libreta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Libreta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Libreta findOrCreate($search, callable $callback = null, $options = [])
 */
class LibretasTable extends Table
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

        $this->setTable('libretas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('orden')
            ->requirePresence('orden', 'create')
            ->notEmpty('orden');

        $validator
            ->requirePresence('materia', 'create')
            ->notEmpty('materia');

        $validator
            ->requirePresence('anio_cursado', 'create')
            ->notEmpty('anio_cursado');

        $validator
            ->integer('carga_horaria')
            ->requirePresence('carga_horaria', 'create')
            ->notEmpty('carga_horaria');

        $validator
            ->requirePresence('profesor', 'create')
            ->notEmpty('profesor');

        $validator
            ->integer('aprobado')
            ->allowEmpty('aprobado');

        $validator
            ->date('fecha_examen')
            ->allowEmpty('fecha_examen');

        return $validator;
    }
}
