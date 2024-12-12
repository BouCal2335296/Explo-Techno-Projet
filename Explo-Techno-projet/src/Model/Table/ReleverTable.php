<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Relever Model
 *
 * @method \App\Model\Entity\Relever newEmptyEntity()
 * @method \App\Model\Entity\Relever newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Relever> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Relever get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Relever findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Relever patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Relever> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Relever|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Relever saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Relever>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Relever>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Relever>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Relever> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Relever>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Relever>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Relever>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Relever> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ReleverTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('relever');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('relever')
            ->requirePresence('relever', 'create')
            ->notEmptyString('relever');

        return $validator;
    }
}
