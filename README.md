#doctrinev2
==========

Estudo pessoal Doctrine 2 e Zend Framework 2

## Instalação

Instalar usando [Composer](http://getcomposer.org)

### Criar o arquivo composer.json

    {
		"name": "joseferrao/doctrinev2",
		"require": {
			"doctrine/orm": "2.*",
			"symfony/yaml": "2.*",
			"zendframework/zendframework": "2.2.*@dev",
			"mpdf/mpdf": "dev-master"
		},
		"autoload": {
			"psr-0": {
				"": "entities/"
				"": "proxies/"
			}
		}
	}

### Baixar composer na pasta raiz do aplicativo

      $ curl -sS http://getcomposer.org/installer | php

### Instalar suas dependências

      $ php composer.phar install

