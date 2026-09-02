<?php

class AnnalynsInfiltration
{
    public function canFastAttack($is_knight_awake): bool
    {
        return $is_knight_awake === false;
    }

    public function canSpy($is_knight_awake, $is_archer_awake, $is_prisoner_awake): bool
    {
        if ($is_knight_awake) {
            return true;
        } else {
            return $is_archer_awake || $is_prisoner_awake;
        }
    }

    public function canSignal($is_archer_awake, $is_prisoner_awake): bool
    {
        return $is_archer_awake === false && $is_prisoner_awake;
    }

    public function canLiberate($is_knight_awake, $is_archer_awake, $is_prisoner_awake, $is_dog_present): bool
    {
        if ($is_dog_present) {
            return $is_archer_awake === false;
        } else {
            if ($is_prisoner_awake) {
                return $is_knight_awake === false && $is_archer_awake === false;
            } else {
                return false;
            }
        }
    }
}