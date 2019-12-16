# Resumen php

### Tipos de asignaciones
 
1. Asignación por valor:
```php
    $x = 3;
    $y = 5;
``` 
2. Asignación por referencia:

```php
    $x = 3;
    $y = &$x;
```
### Variables predefinidas
```php
    $argc  # Muestra el numero de argumentos que se le ha pasado al script
``` 

### Cadenas (String)
* Comillas simples ' ' --> \ unico procesamiento que admite

* Comillas dobles  --> "Interpretan las secuencias de escape"
```php 
   echo "Tambien interpretan valor de variables \n ${x} ó {$x}"  
```
* heredoc
```php 
    $string= <<<EOT
     Equivale a comillas dobles y conservan los saltos de linea
     EOT
```
* nowdoc 
```php 
     $str = <<<'EOT'
        Equivale a comillas simples 
     EOT
``` 
### Algunas funciones de String



```php 
     $str = 'Hola'
     strlen($str); # Devuelve la longitud de la cadena  
     strpos($str, 'o'); # Devuelve la posicion de la primera cadena
     strrpos('pajar', 'aguja') #Devuelve la posición de la ultima aparición de la cadena
     substr('cadena');
     trim('    hola mundo   '); # Quita los espacios
     explode('delimitador', 'cadena') #Devuelve un array   

```
[_Todas las funciones String_](https://www.php.net/manual/es/ref.strings.php)

[_Funciones mbstring_](https://www.php.net/manual/es/ref.mbstring.php)

### Manupuación de datos

[Funciones de manejo de variables](https://www.php.net/manual/es/ref.mbstring.php)

1. Comprobaciones, [Funciones de manejo de variables](https://www.php.net/manual/es/ref.mbstring.php)
   * De tipos: 

        * ```php 
             getType(5); # Devuelve el tipo
             is_boll();
             is_float();
             # ..... is_tipo()
        ```
    * De valores: 
        * ```php 
             is_numeric()
             ctype_'*'()
        ```


