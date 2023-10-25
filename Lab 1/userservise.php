<?php
class UserService
{
    public static function sortByUsername(array $users, bool $flag = true):array
    {
        usort($users, function ($x, $y) use ($flag) {
            $result = $x->username <=> $y->username;
            return $flag ? $result : -$result;
        });

        return $users;
    }

    public static function sortByBirthday(array $users, bool $flag = true):array
    {
        usort($users, function ($x, $y) use ($flag) {
            $result = $x->birthday <=> $y->birthday;
            return $flag ? $result : -$result;
        });

        return $users;
    }
}
