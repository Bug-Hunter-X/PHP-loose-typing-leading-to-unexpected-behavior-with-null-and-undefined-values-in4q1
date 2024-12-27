# PHP Loose Typing and Unexpected Behavior with Null and Undefined

This repository demonstrates a common issue in PHP where loose typing, combined with the handling of `null` and `undefined` values, can lead to unexpected behavior and errors. The `bug.php` file contains code that illustrates this problem, while the `bugSolution.php` file provides a corrected version.

The core issue stems from the lack of strict type checking in PHP. If a function doesn't explicitly handle the `undefined` type, unexpected results or runtime errors can occur when it receives an `undefined` value as input, even if it correctly handles null values.