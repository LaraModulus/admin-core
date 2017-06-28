<?php
namespace LaraMod\Admin\Core\Traits;

trait HelpersTrait {

    public function createSlug($string) {
        return str_slug($string);
    }

    public function autoFill($request){
        $this->update(array_filter($request->only($this->getFillable()), function ($key) use ($request) {
            return in_array($key, array_keys($request->all())) || @$this->getCasts()[$key] == 'boolean';
        }, ARRAY_FILTER_USE_KEY));
        return $this;
    }
}