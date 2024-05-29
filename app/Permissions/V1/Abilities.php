<?php

namespace App\Permissions\V1;

use App\Models\User;

final class Abilities
{
    public const string ReadTicket = 'ticket:read';
    public const string CreateTicket = 'ticket:create';
    public const string ReplaceTicket = 'ticket:replace';
    public const string UpdateTicket = 'ticket:update';
    public const string DeleteTicket = 'ticket:delete';
    public const string CreateOwnTicket = 'ticket:own:create';
    public const string UpdateOwnTicket = 'ticket:own:update';
    public const string DeleteOwnTicket = 'ticket:own:delete';

    public const string ReadUser = 'user:read';
    public const string CreateUser= 'user:create';
    public const string ReplaceUser = 'user:replace';
    public const string UpdateUser = 'user:update';
    public const string DeleteUser = 'user:delete';

    public static function getAbilities (User $user): array
    {
        if ($user->is_manager) {
            return [
                self::CreateTicket,
                self::ReplaceTicket,
                self::UpdateTicket,
                self::DeleteTicket,
                self::ReadTicket,
                self::CreateUser,
                self::ReplaceUser,
                self::UpdateUser,
                self::DeleteUser,
                self::ReadUser
            ];
        } else {
            return [
                self::CreateOwnTicket,
                self::UpdateOwnTicket,
                self::DeleteOwnTicket,
            ];
        }
    }

}
