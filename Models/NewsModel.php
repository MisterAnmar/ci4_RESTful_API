<?php namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
        protected $table      = 'news';
        protected $primaryKey = 'id';

        protected $allowedFields = ['title', 'body'];
        //protected $returnType = 'App\Entities\News';
        protected $returnType = 'array';
        protected $useSoftDeletes = true;

        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;
}
