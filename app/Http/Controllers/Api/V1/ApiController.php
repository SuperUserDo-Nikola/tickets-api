<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponses;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Gate;

class ApiController extends Controller
{
    use ApiResponses;

    protected string $policyClass;

    public function include (string $relation): bool
    {
        $param = request()->get('include');

        if (!isset($param)) {
            return false;
        };

        $includeValue = explode(',', strtolower($param));

        return in_array(strtolower($relation), $includeValue);
    }

    public function isAble ($ability, $targetModel): bool
    {
        try {
            Gate::authorize($ability, [$targetModel, $this->policyClass]);
            return true;
        } catch (AuthorizationException $exception) {
            return false;
        }
    }
}
