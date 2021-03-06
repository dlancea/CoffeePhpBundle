CoffeePhpBundle
===============

Symfony2 Bundle for using [alxlit's PHP implementation of the coffeescript compiler](https://github.com/alxlit/coffeescript-php) as an Assetic filter. Good for using coffeescript in Symfony in a pure PHP environment, no need to install node.js.

If you're using Assetic without Symfony, the assetic filter located in Assetic/Filter should work fine as-is.

Also [available on packagist](https://packagist.org/packages/dlancea/coffee-php-bundle) as package: "dlancea/coffee-php-bundle": "dev-master"

How to use
----------

Install the package and include it in AppKernel.php. Once that's done, you can start using "filter='coffeephp'" in your javascripts tags which contain .coffee files. The files will be compiled into and included as javascript.

Example:
```twig
{% javascripts filter='coffeephp'
	'@AcmeBundle/Resources/assets/coffee/app.coffee'
%}
	<script src="{{ asset_url }}"></script>
{% endjavascripts %}
```
