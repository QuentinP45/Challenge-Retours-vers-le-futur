<?php

class TimeTravel 
{
    private $start;
    private $end;

    /**
     * @param string $date
     */
    public function __construct($date)
    {
        $this->setStart($date);
        $this->setEnd();
    }

    /**
     * @return DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param string $date
     */
    public function setStart($date)
    {
        $this->start = $this->turnIntoDateTime($date);
    }

    /**
     * @return DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    public function setEnd()
    {
        $interval = new DateInterval('PT1000000000S');
        $this->end = $this->findDate($interval);
    }

    /**
     * @return string
     */
    public function getTravelInfo()
    {
        $datetime1 = $this->start;
        $datetime2 = $this->end;

        $interval = date_diff($datetime2, $datetime1);

        return $interval->format('Il y a %y années, %m mois, %d jours, %h heures, %i minutes et %s secondes entre les deux dates');
    }

    /**
     * @return DateTime[]
     */
    public function backToFutureStepByStep(DatePeriod $period)
    {
        foreach ($period as $date) {
            $dates[] = $date->format('M d Y a g:i'); 
        }

        return $dates;
    }
    
    /**
     * @return DateTime
     */
    public function findDate(DateInterval $interval)
    {
        $start = clone $this->start;
        return $start->sub($interval);
    }

    /**
     * @param string $date
     * @return DateTime
     */
    private function turnIntoDateTime($date)
    {
        return new DateTime($date);
    }
}
