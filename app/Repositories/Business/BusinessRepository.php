<?php
/**
 * Created by PhpStorm.
 * User: molap
 * Date: 3/19/2020
 * Time: 11:57 AM
 */

namespace App\Repositories\Business;


use App\Business;
use App\Repositories\BaseRepository;

class BusinessRepository extends BaseRepository implements BusinessRepositoryInterface
{
    public function __construct(Business $business)
    {
        parent::__construct($business);
    }
}
