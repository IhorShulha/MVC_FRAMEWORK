<?php

class Page extends Model
{
    /**
     * @param bool $only_published
     * @return mixed
     */
    public function getList($only_published = false)
    {
        $sql = "select * from pages where 1";
        if ($only_published) {
            $sql .= " and is published = 1";
        }
        return $this->db->query($sql);
    }

    /**
     * @param $alias
     * @return null
     */
    public function getByAlias($alias)
    {
        $alias = $this->db->escape($alias);
        $sql = "select * from pages WHERE alias = '{$alias}' limit 1";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }
}