<?php

interface Interviewer
{
    public function askQuestions();

}

class Developer implements Interviewer
{
    public function askQuestions()
    {
        echo 'Asking about design patterns';
    }

}

class CommunityExecutive implements Interviewer
{
    public function askQuestions(){
        echo "Asking about community building";
    }
}


abstract class HiringManager
{
    abstract public function makeInterviewer():Interviewer;

    public function takeInterview()
    {
        $interviewer = $this->makeInterviewer();
        $interviewer->askQuestions();
    }
}

class DevelopmentManager extends HiringManager
{
    public function makeInterviewer():Interviewer
    {
     return new Developer();   
    }
}

class MarketingManager extends HiringManager
{
    public function makeInterviewer():Interviewer
    {
        return new CommunityExecutive();
    }
}

/*
running Section
*/

$devManager = new DevelopmentManager();
$devManager->takeInterview();

$marketingManager = new MarketingManager();
$marketingManager->takeInterview();



















