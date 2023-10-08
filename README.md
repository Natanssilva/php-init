# php-init
php-curso

--escopo de variaveis

- variaveis definidas no script por padrao são globais
- variaveis definidas dentro de uma função por exemplo são locais e só existem dentro de determinada função
- Existe uma forma de trazer variaveis globais pra dentro de uma função por exemplo
  ```
    global $var1;
    var1 = 'teste'
  ```

  - Atribuir a seguinte maneira dentro de uma função faz com que essa var1 global seja acessivel dentro da função e assim atribuir um valor a ela
      - Esse método só deve ser usado caso seja realmente necessário, normalmente a MELHOR estratégia é passar variaveis por parametro

---Incluindo e requerindo outros scripts em php:
  -Pode usar:
    - require / require_once
    - include / include_once

    -Require : significa que aquele script é requerido e necessário, assim caso de algum erro vai causar erro fatal, assim travando a execução do resto do script
    - Require_once: significa que só vai ser requerido uma unica vez, se for requerido novamente não sera executado

    -Include: significa que determinado script vai ser incluido mas caso o script nao exista, ele nao travará a execução do resto do script igual o require
    - Include_once: mesma lógica anterior
