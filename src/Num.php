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
  class Num
  {
    /**
     * Takes two arguments which can be compared using >, returns the larger
     * one.
     * Comparable -> Comparable -> Value
     */
    static function max($left, $right)
    {
      return $left > $right ? $left : $right;
    }

    /**
     * Takes two arguments which can be compared using >, returns the smaller
     * one.
     * Comparable -> Comparable -> Value
     */
    static function min($left, $right)
    {
      return $left < $right ? $left : $right;
    }

    /**
     * The negation of the inputted number.
     * Number -> Number
     */
    static function negate($n)
    {
      return -$n;
    }

    /**
     * Takes a number and returns its absolute value.
     * Number -> Number
     */
    static function abs($n)
    {
      return abs($n);
    }

    /**
     * Takes a number and returns either -1, 0, or 1 depending on the sign 
     * of the number.
     * Number -> (-1 | 0 | 1)
     */
    static function signum($n): int
    {
      if ($n < 0) {
        return -1;
      } elseif ($n > 0) {
        return 1;
      }
      return 0;
    }

    /**
     * Division truncated toward 0.
     * Number -> Number -> Number
     */
    static function quot($n1, $n2)
    {
      return ~~($n1 / $n2);
    }

    /**
     * Remainder, like the % operator.
     * Number -> Number -> Number
     */
    static function remainder($n1, $n2)
    {
      return $n1 % $n2;
    }

    /**
     * Division truncated down toward negative infinity.
     * Number -> Number -> Number
     */

    /**
     * Remainder, like the %% operator in LiveScript.
     * Number -> Number -> Number
     */

    /**
     * One over the number, ie 1 / x
     * Number -> Number
     */

    /**
     * π
     * Number
     */

    /**
     * τ (2π)
     * Number
     */

    /**
     * Returns e to the argument.
     * Number -> Number
     */

    /**
     * Square root.
     * Number -> Number
     */

    /**
     * Natural log.
     * Number -> Number
     */

    /**
     * Number -> Number
     */

    /**
     * Number -> Number
     */

    /**
     * Number -> Number
     */

    /**
     * Number -> Number
     */

    /**
     * Number -> Number
     */

    /**
     * Number -> Number
     */

    /**
     * Number -> Number -> Number
     */

    /**
     * Number truncated toward 0.
     * Number -> Number
     */

    /**
     * Number rounded to nearest whole number.
     * Number -> Number
     */

    /**
     * Number rounded up.
     * Number -> Number
     */

    /**
     * Number rounded down.
     * Number -> Number
     */

    /**
     * Is it NaN (not a number)? More accurate than the native isNaN function.
     * Number -> Boolean
     */

    /**
     * Is the number even?
     * Number -> Boolean
     */

    /**
     * Is the number odd?
     * Number -> Boolean
     */

    /**
     * Greatest common denominator.
     * Number -> Number -> Number
     */

    /**
     * Least common multiple.
     * Number -> Number -> Number
     */
  }
}