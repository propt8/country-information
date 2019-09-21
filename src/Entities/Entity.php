<?php

namespace propt8\Country\Entities;

class Entity
{
    /**
     * @return array
     */
    public function toArray(): array
    {
        $class = get_class($this);
        $methods = get_class_methods($class);
        $array = [];
        foreach ($methods as $method) {
            preg_match(' /^(get)(.*?)$/i', $method, $results);
            $pre = $results[1] ?? '';
            $k = $results[2] ?? '';
            $k = strtolower(substr($k, 0, 1)) . substr($k, 1);
            $k = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $k));
            if ($pre == 'get') {
                $array[$k] = $this->$method();
            }
        }

        return $array;
    }

    /**
     * @param array $array
     * @param object $object
     * @return mixed
     */
    public static function toObject($object, array $array)
    {
        $class = get_class($object);
        $methods = get_class_methods($class);
        foreach ($methods as $method) {
            preg_match(' /^(set)(.*?)$/i', $method, $results);
            $pre = $results[1]  ?? '';
            $k = $results[2]  ?? '';
            $k = strtolower(substr($k, 0, 1)) . substr($k, 1);
            $k = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $k));
            if ($pre == 'set' && isset($array[$k])) {
                $object->$method($array[$k]);
            }
        }

        return $object;
    }
}
