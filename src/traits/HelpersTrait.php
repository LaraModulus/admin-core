<?php
namespace LaraMod\Admin\Core\Traits;

trait HelpersTrait {

    public function createSlug($string) {
        $cyr = ['/а/', '/б/', '/в/', '/г/', '/д/', '/е/', '/ж/', '/з/', '/и/', '/й/', '/к/', '/л/','/м/','/н/', '/о/', '/п/', '/р/', '/с/', '/т/', '/у/', '/ф/', '/ц/', '/ч/', '/ш/', '/щ/', '/ь/', '/ъ/', '/ю/', '/я/'];
        $lat = ['a', 'b', 'v', 'g', 'd', 'e', 'j', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'c', 'ch', 'sh', 'sht', 'i', 'u', 'q'];
        $string = preg_replace($cyr, $lat, $string);
        return str_slug($string);
    }

    public function autoFill($request){
        $this->update(array_filter($request->only($this->getFillable()), function ($key) use ($request) {
            return in_array($key, array_keys($request->all())) || @$this->getCasts()[$key] == 'boolean';
        }, ARRAY_FILTER_USE_KEY));
        return $this;
    }
}