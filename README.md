# Prelude PHP

[![Build Status](https://travis-ci.org/haskellcamargo/prelude-php.svg?branch=master)](https://travis-ci.org/haskellcamargo/prelude-php)

An awesome library for data handling!

Prelude PHP is a generic library for data handling, in special, lists, with
basis on Haskell's Prelude module and [LiveScript Prelude Library](https://github.com/gkz/prelude-ls).
Prelude PHP is only PHP-7 compatible, in the moment.

## Documentation

### Prelude::Str

#### `split(string $sep, string $str): array`

`String -> String -> [String]`
Splits a string on a separator into a list of strings.

### `join(string $sep, array $xs): array`

`String -> [String] -> String`
Joins a list with the specified separator.

