<?php
class Job
{
    private $company;
    private $date_range;
    private $position;

    function __construct($company, $date_range, $position)
    {
        $this->company = $company;
        $this->date_range = $date_range;
        $this->position = $position;
    }

    function setCompany($new_company)
    {
        $this->company = (string) $new_company;
    }

    function setDateRange($new_date_range)
    {
        $this->date_range = (string) $new_date_range;
    }

    function setPosition($new_position)
    {
        $this->position = (string) $new_position;
    }

    function getCompany()
    {
        return $this->company;
    }

    function getDateRange()
    {
        return $this->date_range;
    }

    function getPosition()
    {
        return $this->position;
    }

    function save()
    {
        array_push($_SESSION['list_of_jobs'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_jobs'];
    }

}
?>
