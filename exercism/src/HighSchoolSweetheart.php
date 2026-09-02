<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return trim($name)[0];
    }

    public function initial(string $name): string
    {
        return strtoupper($this->firstLetter($name)) . '.';
    }

    public function initials(string $name): string
    {
        // trim name -- if it starts with whitespace, names[0] will be whitespace
        // / & / - delimiters marking where regex pattern starts and ends
        // \s - any whitespace character
        // s+ - one or more
        // preg - Perl Regular Expressions - AKA PCRE library - Perl Compatible Regular Expressions
        $names = preg_split('/\s+/', trim($name));
        // can be done without a trim
        // preg_split('/\s+/', $string, -1, PREG_SPLIT_NO_EMPTY); -1 or 0 means no limit on size of array created
        return $this->initial($names[0]) . ' ' . $this->initial($names[1]);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $a = $this->initials($sweetheart_a);
        $b = $this->initials($sweetheart_b);
        return <<<HEART
             ******       ******
           **      **   **      **
         **         ** **         **
        **            *            **
        **                         **
        **     $a  +  $b     **
         **                       **
           **                   **
             **               **
               **           **
                 **       **
                   **   **
                     ***
                      *
        HEART; // The indentation of this label strips the same amount of leading whitespace from every line of the
        // string - allows STRING manipulation without having to worry about CODE indentation. This is a heredoc.
    }
}