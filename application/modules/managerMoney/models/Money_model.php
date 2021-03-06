<?php
/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 1/10/2019
 * Time: 11:34 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'models/Base_models.php';
class Money_model extends Base_models
{
    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE, TRUE);
        $this->tableName = 'money';
        $this->id = 'id';
        $this->content = 'content';
        $this->date = 'date';
    }

    public function getResult($where = [], $limit = 10, $start = 0, $orderField = 'id', $order = 'DESC')
    {
        $this->db->select('
            *
        ');
        $this->db->from($this->tableName);

        if (!empty($where)) {
            foreach ($where as $field => $value) {
                $this->db->where($this->tableName . '.' . $field, $value);
            }
        }

        $this->db->limit($limit, $start);
        $this->db->order_by($this->tableName . '.' . $orderField, $order);
        return $this->db->get()->result();
    }

    public function getInfo($id)
    {
        $this->db->select('*');
        $this->db->from($this->tableName);
        $this->db->where($this->tableName . '.' . $this->id, $id);
        return $this->db->get()->row();
    }

    public function getByDate($fromDate, $toDate)
    {
        $this->db->select('*');
        $this->db->from($this->tableName);
        $this->db->where($this->tableName . '.' . $this->date . '>=', $fromDate);
        $this->db->where($this->tableName . '.' . $this->date . '<=', $toDate);
        return $this->db->get()->result();
    }

    public function searchContent($key = '', $limit = 10, $start = 0)
    {
        $this->db->distinct();
        $this->db->select("content");
        $this->db->like('content', $key);
        $this->db->limit($limit, $start);
        $this->db->order_by('content', 'ASC');
        return $this->db->get($this->tableName)->result();

    }

}