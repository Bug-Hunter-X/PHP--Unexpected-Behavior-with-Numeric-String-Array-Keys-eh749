# PHP Array Key Type Mismatch

This repository demonstrates a common, yet subtle, bug in PHP related to array key type mismatches.  The bug arises when checking for the existence of keys in an array where keys are numeric strings, not integers. Functions like `isset()` and `array_key_exists()` can return false positives or negatives when keys are treated as integers rather than strings.

## Bug Description:
The bug lies in the inconsistent handling of numeric string keys in PHP arrays.  A key that's a string representation of an integer ('1') is not necessarily treated as equivalent to an integer key (1).

## Solution:
The provided solution demonstrates a reliable method to check for the existence of both integer and string representations of numeric keys.