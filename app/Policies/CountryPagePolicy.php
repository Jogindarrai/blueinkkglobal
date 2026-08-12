<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\CountryPage;
use Illuminate\Auth\Access\HandlesAuthorization;

class CountryPagePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:CountryPage');
    }

    public function view(AuthUser $authUser, CountryPage $countryPage): bool
    {
        return $authUser->can('View:CountryPage');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:CountryPage');
    }

    public function update(AuthUser $authUser, CountryPage $countryPage): bool
    {
        return $authUser->can('Update:CountryPage');
    }

    public function delete(AuthUser $authUser, CountryPage $countryPage): bool
    {
        return $authUser->can('Delete:CountryPage');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:CountryPage');
    }

    public function restore(AuthUser $authUser, CountryPage $countryPage): bool
    {
        return $authUser->can('Restore:CountryPage');
    }

    public function forceDelete(AuthUser $authUser, CountryPage $countryPage): bool
    {
        return $authUser->can('ForceDelete:CountryPage');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:CountryPage');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:CountryPage');
    }

    public function replicate(AuthUser $authUser, CountryPage $countryPage): bool
    {
        return $authUser->can('Replicate:CountryPage');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:CountryPage');
    }

}