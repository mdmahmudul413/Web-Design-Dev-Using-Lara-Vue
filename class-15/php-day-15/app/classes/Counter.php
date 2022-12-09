<?php


namespace App\classes;


class Counter
{
    public $string, $words, $letters, $data;

    public function __construct($post)
    {
        $this->string = $post['string'];
    }

    public function getResult(){
        $this->words = str_word_count($this->string);
        $this->letters = strlen($this->string);

        $this->data = [
            'givenString' => 'Given String is ' . '"' . $this->string . '"',
            'words'       => 'Total words count is ' . $this->words,
            'letters'     => 'Total letters count is ' . $this->letters
        ];

        return $this->data;
    }

    public function getWordsCount(){
        $this->words = str_word_count($this->string);
        return 'Total Word is ' . $this->words . ' & ';
    }
    public function getLettersCount(){
        $this->letters = strlen($this->string);
        return 'Total Character is ' . $this->letters;
    }
}