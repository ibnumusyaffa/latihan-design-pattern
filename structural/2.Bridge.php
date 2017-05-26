<?php

interface WebPage
{
    public function __construct(Theme $theme);
    public function getContent();
}

class About implements  WebPage
{
    protected $theme;

    public function __construct(Theme $theme)
    {
 
 
        $this->theme = $theme;
    }
    public function getContent()
    {
        return "about page in" . $this->theme->getColor();
    }
}

class Careers implements WebPage
{
    protected $theme;
    
    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }
    public function getContent()
    {
        return "careers page in".$this->theme->getColor();
    }
}


interface Theme
{
    public function getColor();
}

class DarkTheme implements  Theme
{
    public function getColor()
    {
        return "Dark Black";
    }
}

class LightTheme implements Theme
{
    public function getColor()
    {
        return "off White";
    }
}

class AquaTheme implements Theme
{
    public function getColor()
    {
        return "light blue";
    }
}


$darkTheme = new DarkTheme();

$about = new About($darkTheme);
$careers = new Careers($darkTheme);

echo $about->getContent();
echo $careers->getContent();