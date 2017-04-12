<?php
namespace LaraMod\AdminCore\Scopes;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class AdminCoreOrderByCreatedAtScope implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        return $builder->orderBy('created_at', 'desc');
    }
}