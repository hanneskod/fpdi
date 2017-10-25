> *NOTE* that this package is discontinued and will not be updated.
> Since version 1.5.3 FPDI is officially available via composer and
> [github](https://github.com/Setasign/FPDI). You are encouraged to
> update to FPDI 2.0 and use the official fork.

# FPDI - Free PDF Document Importer

[![Packagist Version](https://img.shields.io/packagist/v/itbz/fpdi.svg?style=flat-square)](https://packagist.org/packages/itbz/fpdi)

Unofficial [PSR-4](http://www.php-fig.org/psr/psr-4/) compliant version of the
[FPDI](http://www.setasign.com/products/fpdi/about/) library with some minor
changes.

The library is namespaced in fpdi. To create instance use:

```php
$fpdi = new \fpdi\FPDI();
```

Installing
-----------
Install using [composer](https://getcomposer.org/). For historical reasons the
package exists in packagist as `itbz/fpdi`. From project root use

    composer require itbz/fpdi:~1.0

Support for TCPDF
-----------------
To use with TCPDF version `1.5.2-patch1` or later must be used, due to a
conversion error in earlier versions.

Please note that the `TCPDF` class must be loaded prior to instantiating FPDI
to force the usage of TCPDF. An example can be found [here](https://github.com/hanneskod/fpdi/issues/16).

Contributing
------------
See the [CONTRIBUTING](CONTRIBUTING.md) file.

Build from source
-----------------
Converting from setasign source is power by [phing](https://www.phing.info/).
See [build.xml](build.xml) for concrete instructions. To execute a build from
the command line use

    $ phing

Tests are run using

    $ phing test

Possibly followed by

    $ phing cleanup

License
-------
The MIT License (MIT)

Copyright (c) 2015 Setasign - Jan Slabon, https://www.setasign.com

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
