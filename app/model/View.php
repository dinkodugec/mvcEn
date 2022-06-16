<?php

class View
{
    private $predlozak;

    public function __construct($predlozak='predlozak')
    {
        $this->predlozak=$predlozak;
    }

    public function render($stranicaZaRender,$parametri=[])
    {
      /*   print_r($parametri);  */
        ob_start(); // output buffer  keširanje, privremeno nesto pohranjuješ
        extract($parametri);
        include BP . 'view' . DIRECTORY_SEPARATOR . 
        $stranicaZaRender . '.phtml';
        $sadrzaj = ob_get_clean();  // ona vraca iz memorije
        include BP . 'view' . DIRECTORY_SEPARATOR .
        $this->predlozak . '.phtml';
    }
}

/* The extract() function is an inbuilt function in PHP. The extract() function does array to variable conversion. 
That is it converts array keys into variable names and array values into variable value. 
In other words, we can say that the extract() function imports variables from an array to the symbol table.

The ob_start() function creates an output buffer and so controll output data to browser. A callback function can be passed in to do processing on the contents of the buffer before 
it gets flushed from the buffer. 
Flags can be used to permit or restrict what the buffer is able to do.
*/