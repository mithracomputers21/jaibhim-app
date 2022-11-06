<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Habitation;
use Illuminate\Auth\Access\HandlesAuthorization;

class HabitationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->can('view_any_habitation');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Habitation  $habitation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Habitation $habitation)
    {
        return $user->can('view_habitation');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('create_habitation');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Habitation  $habitation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Habitation $habitation)
    {
        return $user->can('update_habitation');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Habitation  $habitation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Habitation $habitation)
    {
        return $user->can('delete_habitation');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function deleteAny(User $user)
    {
        return $user->can('delete_any_habitation');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Habitation  $habitation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Habitation $habitation)
    {
        return $user->can('force_delete_habitation');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDeleteAny(User $user)
    {
        return $user->can('force_delete_any_habitation');
    }

    /**
     * Determine whether the user can restore.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Habitation  $habitation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Habitation $habitation)
    {
        return $user->can('restore_habitation');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restoreAny(User $user)
    {
        return $user->can('restore_any_habitation');
    }

    /**
     * Determine whether the user can replicate.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Habitation  $habitation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function replicate(User $user, Habitation $habitation)
    {
        return $user->can('replicate_habitation');
    }

    /**
     * Determine whether the user can reorder.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function reorder(User $user)
    {
        return $user->can('reorder_habitation');
    }

}
