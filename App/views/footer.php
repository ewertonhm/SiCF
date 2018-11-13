<?php

class Footer {
     
    private function html(){
        echo "  </div>
                <footer class='footer'>
                    <div class='container'>
                        <span class='text-muted'><b>Copyright 2019</b> Ewerton Henrique Marschalk</span>
                    </div>
                </footer>
                <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
                <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
                <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js'></script>
                </body>
                </html>
            ";
    }
    
    function __construct() {
        $this->html();
    }
    

}



