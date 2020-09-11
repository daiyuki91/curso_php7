<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Curso PHP 7 - <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

<p>Teste de template!</p>

<p>Aluno: Daiyuki</p>

<footer>Versão do PHP: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></footer>