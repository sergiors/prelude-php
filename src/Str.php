<?php
/**
 * This file is part of Prelude PHP.
 *
 *  Prelude PHP is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  Prelude PHP is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with Prelude PHP.  If not, see <http://www.gnu.org/licenses/>.
 */
namespace Prelude
{
  class Str
  {
    /**
     * Splits a string on a separator into a list of strings.
     * String -> String -> [String]
     */
    static function split(string $sep, string $str): array
    {
      return explode($sep, $str);
    }

    /**
     * Joins a list with the specified separator.
     * String -> [String] -> String
     */
    static function join(string $sep, array $xs): string
    {
      return implode($sep, $xs);
    }

    /**
     * Splits a string at newlines into a list.
     * String -> [String]
     */
    static function lines(string $str): array
    {
      if (strlen($str) === 0) {
        return [];
      }
      return explode("\n", $str);
    }

    /**
     * Joins a list of strings into a single string using newlines.
     * [String] -> String
     */
    static function unlines(array $xs): string
    {
      return implode(PHP_EOL, $xs);
    }

    /**
     * Splits a string at spaces (one or more), returning a list of strings.
     * String -> [String]
     */
    static function words(string $str): array
    {
      if (strlen($str) === 0) {
        return [];
      }
      return preg_split("/[ ]+/", $str);
    }
    
    /**
     * Joins a list of strings into a single string using spaces.
     * [String] -> String
     */
    static function unwords(array $xs): string
    {
      return implode(" ", $xs);
    }

    /**
     * Splits a string at every character, returning a list of one character
     * strings.
     * String -> [String]
     */
    static function chars(string $str): array
    {
      return str_split($str);
    }

    /**
     * Joins a list of strings into a single string using no separator.
     * [String] -> String
     */
    static function unchars(array $xs): string
    {
      return implode("", $xs);
    }

    /**
     * Takes its second argument, and repeats it n times to create a new,
     * single, string.
     * Number -> String -> String
     */
    static function repeat(int $n, string $str): string
    {
      $result = "";
      for ($i = 0, $strlen = strlen($str); $i < $n; $i++) {
        $result .= $str;
      }
      return $result;
    }

    /**
     * Capitalizes a string.
     * String -> String
     */
    static function capitalize(string $str): string
    {
      return ucwords($str);
    }

    /**
     * Camelizes a string.
     * String -> String
     */
    static function camelize(string $str): string
    {
      # TODO
    }

    /**
     * Dasherizes a string.
     * String -> String
     */
    static function dasherize(string $str): string
    {
      # TODO
    }

    /**
     * Whether the string is empty.
     * String -> Boolean
     */
    static function empty(string $str): string
    {
      return $str === "";
    }

    /**
     * Reverses a string.
     * String -> String
     */

    /**
     * Returns a slice of the inputted string.
     * Number -> String -> String
     */

    /**
     * Returns the first n items in string.
     * Number -> String -> String
     */

    /**
     * Returns the result of dropping the first n items of the string.
     * Number -> String -> String
     */

    /**
     * Equivalent to [(Str.take n, xs), (Str.drop n, xs)]
     * Number -> String -> [String, String]
     */

    /**
     * Takes the first items of the string which pass the test.
     * (String -> Boolean) -> String -> String
     */

    /**
     * Drops the first items of the string which pass the test.
     * (String -> Boolean) -> String -> String
     */

    /**
     * Equivalent to [(take-while f, xs), (drop-while f, xs)]
     * (String -> Boolean) -> String -> [String, String]
     */

    /**
     * Equivalent to span (not) << f, xs
     * (String -> Boolean) -> String -> [String, String]
     */
  }
}