<?php

namespace Prelude
{
  include "./src/Str.php";

  class StrTest extends \PHPUnit_Framework_TestCase
  {
    public function testSplit()
    {
      $fruits    = "apple, orange, pineapple, grape";
      $fruitList = Str::split(", ", $fruits);
      $this->assertEquals(["apple", "orange", "pineapple", "grape"],
        $fruitList);
    }

    public function testJoin()
    {
      $fruitList = ["apple", "orange", "pineapple", "grape"];
      $fruits    = Str::join(", ", $fruitList);
      $this->assertEquals("apple, orange, pineapple, grape", $fruits);
    }

    public function testLines()
    {
      $text      = "The quick brown fox\njumps over the\nlazy dog";
      $sentences = Str::lines($text);

      $this->assertEquals(["The quick brown fox", "jumps over the", "lazy dog"],
        $sentences);
    }

    public function testUnlines()
    {
      $sentences = ["The quick brown fox", "jumps over the", "lazy dog"];
      $text      = Str::unlines($sentences);

      $this->assertEquals("The quick brown fox\njumps over the\nlazy dog", $text);
    }

    public function testWords()
    {
      $text     = "The quick brown fox jumps over the lazy dog";
      $wordList = Str::words($text);

      $this->assertEquals(["The", "quick", "brown", "fox", "jumps", "over",
        "the", "lazy", "dog"], $wordList);
    }

    public function testUnwords()
    {
      $wordList = ["The", "quick", "brown", "fox", "jumps", "over", "the",
        "lazy", "dog"];
      $text     = Str::unwords($wordList);

      $this->assertEquals("The quick brown fox jumps over the lazy dog", $text);
    }

    public function testChars()
    {
      $text     = "Capybaras are love";
      $charList = Str::chars($text);

      $this->assertEquals(["C", "a", "p", "y", "b", "a", "r", "a", "s", " ",
        "a", "r", "e", " ", "l", "o", "v", "e"], $charList);
    }

    public function testUnchars()
    {
      $charList = ["C", "a", "p", "y", "b", "a", "r", "a", "s", " ", "a", "r",
        "e", " ", "l", "o", "v", "e"];
      $text     = Str::unchars($charList);

      $this->assertEquals("Capybaras are love", $text);
    }

    public function testRepeat()
    {
      $placeholder   = "x";
      $idPlaceholder = Str::repeat(10, $placeholder);

      $this->assertEquals("xxxxxxxxxx", $idPlaceholder);
    }

    public function testCapitalize()
    {
      $name   = "marcelo";
      $upname = Str::capitalize($name);

      $this->assertEquals("Marcelo", $upname);
    }

    public function testEmpty()
    {
      $emptyStr = "";
      $fullStr  = "Capybara";
      $trueVal  = Str::empty($emptyStr);
      $falseVal = Str::empty($fullStr);

      $this->assertEquals(true, $trueVal);
      $this->assertEquals(false, $falseVal);
    }
  }
}