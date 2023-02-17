<?php


namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class TeamwinerIsOneOfTeams extends Constraint
{
    public $message = 'The winning team must be one of the two teams.';

    public function validatedBy()
    {
        return TeamwinerIsOneOfTeamsValidator::class;
    }
}