<?php
/**
 * Created by PhpStorm.
 * User: Zenn
 * Date: 1/6/2019
 * Time: 11:27 PM
 */

class Base_models extends CI_Model
{
    /**
     * @param array $data
     * @return mixed
     */
    public function add($data = array())
    {
        $this->db->insert($this->tableName, $data);
        return $this->db->insert_id();
    }

    /**
     * @param string $id
     * @param array $data
     * @return mixed
     */
    public function update($id = '', $data = array())
    {
        $this->db->where($this->tableName . '.id', $id);
        $this->db->update($this->tableName , $data);
        return $this->db->affected_rows();
    }

    /**
     * @param string $id
     * @return mixed
     */
    public function delete($id = '')
    {
        $this->db->where('id', $id);
        $this->db->delete($this->tableName);
        return $this->db->affected_rows();
    }

    /**
     * @param $field
     * @param $value
     * @return mixed
     */
    public function checkExist($field, $value)
    {
        $this->db->from($this->tableName);
        $this->db->where($this->tableName . '.' . $field, $value);
        return $this->db->count_all_results();
    }
}