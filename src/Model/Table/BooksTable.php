<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Books Model
 *
 * @method \App\Model\Entity\Book get($primaryKey, $options = [])
 * @method \App\Model\Entity\Book newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Book[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Book|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Book patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Book[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Book findOrCreate($search, callable $callback = null, $options = [])
 */
class BooksTable extends Table
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

        $this->setTable('books');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->addBehavior('Timestamp', [
        'events' => [
            'Model.beforeSave' => [
                'created_at' => 'new',
                'updated_at' => 'always',
            ],
            'Orders.completed' => [
                'completed_at' => 'always'
            ]
        ]
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('bookName')
            ->requirePresence('bookName', 'create')
            ->notEmpty('bookName');

        $validator
            ->scalar('alias')
            ->requirePresence('alias', 'create')
            ->notEmpty('alias');

        $validator
            ->scalar('bookType')
            ->allowEmpty('bookType');

        $validator
            ->scalar('author')
            ->allowEmpty('author');



        return $validator;
    }
    /**
     * get Books By Type method
     * input BookType
     * return array
     */
    public function getBookByType($type = null)
    {
        $result = $this->find('All')->toArray();
        return $result;
    }
}
