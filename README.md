# Stern

[![Build Status](https://github.com/paragonie/stern/actions/workflows/ci.yml/badge.svg)](https://github.com/paragonie/stern/actions)
[![Latest Stable Version](https://poser.pugx.org/paragonie/stern/v/stable)](https://packagist.org/packages/paragonie/stern)
[![Latest Unstable Version](https://poser.pugx.org/paragonie/stern/v/unstable)](https://packagist.org/packages/paragonie/stern)
[![License](https://poser.pugx.org/paragonie/stern/license)](https://packagist.org/packages/paragonie/stern)

Stern lets you built type-safe PHP projects, even if your project's users aren't writing type-safe code. 

**Requires PHP 7+**

## Usage

Using Stern is simply:

1. Make your class use the `SternTrait`.
2. Rename your methods from `whateverName` to `strictWhateverName`.
3. Enjoy strict-typing whether your users like it or not.

## Example

```diff
  <?php
  declare(strict_types=1);
  namespace YourVendor\YourNamespace;

  class YourClassThatUsesStrictTypes
  {
+      use \ParagonIE\Stern\SternTrait;
  
      /* ... */
  
-     public function foo(string $param = ''): bool
+     public function strictFoo(string $param = ''): bool
      {
      }
  }
```

## Docblock Usability 

For better usability (especially with type-aware IDEs like PHPStorm), make sure
you use [`@method`](https://docs.phpdoc.org/references/phpdoc/tags/method.html)
docblocks.

```diff
  <?php
  declare(strict_types=1);
  namespace YourVendor\YourNamespace;

+   /**
+    * @method bool foo(string $param = '')
+    */
  class YourClassThatUsesStrictTypes
  {
+      use \ParagonIE\Stern\SternTrait;
  
      /* ... */
  
-     public function foo(string $param = ''): bool
+     public function strictFoo(string $param = ''): bool
      {
      }
  }
```
