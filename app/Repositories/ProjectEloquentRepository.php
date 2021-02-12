<?php namespace App\Repositories;

use App\Interfaces\ProjectEloquentInterface;
use App\Models\Project;

class ProjectEloquentRepository extends BaseEloquentRepository implements ProjectEloquentInterface
{
    protected $modelName = Project::class;
}
