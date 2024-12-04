<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Historiquerelever Model
 *
 * @method \App\Model\Entity\Historiquerelever newEmptyEntity()
 * @method \App\Model\Entity\Historiquerelever newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Historiquerelever> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Historiquerelever get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Historiquerelever findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Historiquerelever patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Historiquerelever> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Historiquerelever|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Historiquerelever saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Historiquerelever>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Historiquerelever>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Historiquerelever>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Historiquerelever> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Historiquerelever>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Historiquerelever>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Historiquerelever>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Historiquerelever> deleteManyOrFail(iterable $entities, array $options = [])
 */
class HistoriquereleverTable extends Table
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

        $this->setTable('historiqueRelever');
        $this->setDisplayField(['id', 'noPosition']);
        $this->setPrimaryKey(['id', 'noPosition']);
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
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        return $validator;
    }
}