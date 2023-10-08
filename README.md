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
