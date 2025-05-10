<?php

$nome = "Weslley Santos";

# Disponível a partir do PHP 8.0
echo str_repeat("-", 40) . PHP_EOL;
echo "Analisando se uma string contém um texto" . PHP_EOL;
echo str_repeat("-", 40) . PHP_EOL;
$ehDaMinhaFamilia = str_contains($nome, "Santos");

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}

echo PHP_EOL;

# Analisando começo e final de strings
echo str_repeat("-", 40) . PHP_EOL;
echo "Analisando o começo e final de strings" . PHP_EOL;
echo str_repeat("-", 40) . PHP_EOL;
$url = "https://google.com";

echo "URL em análise: $url" . PHP_EOL;

if (str_starts_with($url, "https")) {
    echo "É uma URL segura";
} else {
    echo "Não é uma URL segura";
}

echo PHP_EOL;

if (str_ends_with($url, ".br")) {
    echo "É um domínio do Brasil";
} else {
    echo "Não é um domínio do Brasil";
}

echo PHP_EOL . PHP_EOL;

# Recuperando uma substring
echo str_repeat("-", 30) . PHP_EOL;
echo "Recuperando uma substring" . PHP_EOL;
echo str_repeat("-", 30) . PHP_EOL;

$email = "weslley@gmail.com.br";

echo "String base: $email" . PHP_EOL;

echo "Primeiro pedaço: ";
echo substr($email, 0, "7") . PHP_EOL;
echo "Segundo pedaço: ";
echo substr($email, 8) . PHP_EOL;

echo PHP_EOL;

echo "Usando `strpos`" . PHP_EOL;
$charPosition = strpos($email, '@');

echo "Primeiro pedaço: ";
echo substr($email, 0, $charPosition) . PHP_EOL;
echo "Segundo pedaço: ";
echo substr($email, $charPosition + 1) . PHP_EOL;

echo PHP_EOL . PHP_EOL;

# Verificando o tamanho de uma string
echo str_repeat("-", 40) . PHP_EOL;
echo "Verificando o tamanho de uma string" . PHP_EOL;
echo str_repeat("-", 40) . PHP_EOL;

$senha = "123";

echo "Analisando a string $senha" . PHP_EOL;
echo "Tamanho total da string (bytes): " . strlen($senha) . PHP_EOL;
echo "Tamanho total da string (caracteres): " . mb_strlen($senha, 'UTF-8') . PHP_EOL;

if (strlen($senha) < 8) {
    echo "A senha tem menos de 8 bytes." . PHP_EOL;
}

if (mb_strlen($senha, 'UTF-8') < 8) {
    echo "A senha tem menos de 8 caracteres." . PHP_EOL;
}

echo PHP_EOL . PHP_EOL;

# Manipulando case
echo str_repeat("-", 40) . PHP_EOL;
echo "Manipulando o case de uma string" . PHP_EOL;
echo str_repeat("-", 40) . PHP_EOL;

$usuario = substr($email, 0, $charPosition);

echo "String original: $usuario" . PHP_EOL;

# strtoupper e strtolower trabalham com bytes.
# mb_str trabalha com multibytes (permitem lidar com acentos, por exemplo).
echo "Upper case (strtoupper): " . strtoupper($usuario) . PHP_EOL;
echo "Lower case (strtolower): " . strtolower($usuario) . PHP_EOL;

echo PHP_EOL;

echo "Upper case (mb_strtoupper): " . mb_strtoupper($usuario) . PHP_EOL;
echo "Lower case (mb_strtolower): " . mb_strtolower($usuario) . PHP_EOL;

echo PHP_EOL . PHP_EOL;
