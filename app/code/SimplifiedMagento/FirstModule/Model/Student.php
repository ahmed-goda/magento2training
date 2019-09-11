<?php

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\StudentInterface;
use SimplifiedMagento\FirstModule\Api\ColorInterface;
use SimplifiedMagento\FirstModule\Api\SizeInterface;

class Student implements StudentInterface
{
    protected $name;
    protected $age;
    protected $scores;

    /**
     * Class constructor.
     */
    public function __construct(string $name = 'Alex', int $age = 28, array $scores = ['maths'=>92,'science'=>98])
    {
        $this->name = $name;
        $this->age = $age;
        $this->scores = $scores;
    }

    public function getStudentAttributes()
    {
        return "Student has ".$this->name." and ".$this->age." years";
    }
}