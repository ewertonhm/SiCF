<?php

class Head {
    public $title;
    
    function getTitle() {
        return $this->title;
    }

    function setTitle($title) {
        $this->title = $title;
    }
     
    private function html(){
        echo "  <!DOCTYPE html>
                <html>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
                        <title>".$this->getTitle()."</title>
                        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
                        <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                        <link href='https://getbootstrap.com/docs/4.1/examples/sticky-footer/sticky-footer.css' rel='stylesheet'>
                </head>
                <body>
                <div class='container-fluid'>
            ";
    }
    
    function __construct($title) {
        $this->setTitle($title);
        $this->html();
    }
    

}



